<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SweetAlert extends Component
{
    public $title;
    public $text;
    public $icon;
    public $buttonText;
    public $buttonId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $text, $icon, $buttonText, $buttonId)
    {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->buttonText = $buttonText;
        $this->buttonId = $buttonId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sweet-alert');
    }
}