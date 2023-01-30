<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gamecell extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name, $image, $desc, $id, $action, $method, $rating, $deletable;
    public function __construct($name, $image, $desc, $id, $action, $method, $rating = 1, $deletable = false)
    {
        $this->name = $name;
        $this->image = $image;
        $this->desc = $desc;
        $this->action=$action;
        $this->id=$id;
        $this->method=$method;
        $this->rating=$rating;
        $this->deletable=$deletable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gamecell');
    }
}
