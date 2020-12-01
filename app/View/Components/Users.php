<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Users extends Component
{
    public $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function countUsers() {
        return count($this->users);
    }

    public function render()
    {
        return view('components.users');
    }
}
