<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public $type;

    public function __construct($type = '')
    {
        $this->type = $type;
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <p class="alert alert-{{$type}}">{{ $slot }}</p>
            </div>
        blade;
    }
}
