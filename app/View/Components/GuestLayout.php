<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public $noPadding;

    public function __construct($noPadding = false)
    {
        $this->noPadding = $noPadding;
    }
    public function render()
    {
        return view('layouts.guest');
    }
}
