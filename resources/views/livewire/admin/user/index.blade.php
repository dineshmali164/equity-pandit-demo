<div>
    <div class="container mx-auto px-12 sm:px-12">
        <div class="py-12">
            <div class="-mx-4 sm:-mx-12 px-12 sm:px-8 py-4 overflow-x-auto">
                <input type="text" placeholder="Search" wire:model="search">
                <div
                    class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
                >
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                            >
                                Email
                            </th>


                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{  $user->email }}</p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"> User Not Found</td>
                            </tr>
                        @endforelse

                        </tbody>

                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
