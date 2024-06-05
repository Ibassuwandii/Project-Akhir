<?php

namespace App\View\Components\Template\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    /**
     * Create a new component instance.
     */

     public $url;
     public $title;
     public $icon;
     public $active;

    public function __construct($url, $title, $icon)
    {
     $this->url     = $url;
     $this->title   = $title;
     $this->icon    = $icon;
     $this->active  = $this->checkActive();
    }

    /**
     * Get the view / contents that represent the component.
     */

     public function checkActive()
     {
        $state = true;
        $url =  $this->url;
        $arr_url = explode('/', $url);
        foreach ($arr_url as $key => $value) {
            $segment = request()->segment($key + 1);
            if ($segment != $value) $state = false;
        }
        return $state;
     }

    public function render(): View|Closure|string
    {
        return view('components.template.menu.menu-item');
    }


}
