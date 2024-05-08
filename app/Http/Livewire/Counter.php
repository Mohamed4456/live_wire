<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    
    public function render()
    {
        return view('livewire.counter.counter');
    }



    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
 
}
