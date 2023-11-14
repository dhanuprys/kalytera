<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin-dashboard')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
