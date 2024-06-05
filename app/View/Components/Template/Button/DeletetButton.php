<?php

namespace App\View\Components\Template\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeletetButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $path;
    public function __construct($id=null,  $path = null)
    {
        $this->id=$id;
        $this->path=$path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.template.button.deletet-button');
    }
}
