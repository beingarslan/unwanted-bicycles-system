<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AuthRegisterLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('auth.register-layout', ['comment' => 'Sign-in', 'wrapperClass' => 'w-lg-500px']);
    }
}
