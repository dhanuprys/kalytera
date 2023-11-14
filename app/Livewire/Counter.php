<?php

namespace App\Livewire;

use Livewire\Component;

#[Title('Create Post')]
class Counter extends Component
{
    public $title = 'Hello';
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
