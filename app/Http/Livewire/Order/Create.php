<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $product;

    public $name;
    public $email;
    public $address;
    public $phone;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required'],
        'phone' => ['required','integer'],
        'address' => ['required'],
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function order()
    {
        $this->validate();
        $order =  Order::create([
            'user_id' => auth()->id(),
            'product_id' => $this->product->id,
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone' => $this->phone,
            'order_id' => $this->orderId(),
            'expected_delivery_date' => now()->addDays(4)
        ]);

        return to_route('order-confirm',$order);
        dd('saved',$order);
    }

    public function render()
    {
        return view('livewire.order.create');
    }

    private function orderId()
    {
        $identifier = Order::query()
            ->whereMonth('created_at', now()->format('m'))
            ->whereYear('created_at', now()->format('Y'))
            ->orderByDesc('order_id')
            ->value('order_id');

        if (! $identifier) {
            $identifier = 'DEMO'.'-'.date('y').date('m').'-'.'000';
        }

        $expNum = explode('-', $identifier);

        $incrementNumber = ++$expNum[2];

        $prepareArray = [
            $expNum[0], $expNum[1], str_pad($incrementNumber, 3, 0, STR_PAD_LEFT),
        ];

        return implode('-', $prepareArray);
    }
}
