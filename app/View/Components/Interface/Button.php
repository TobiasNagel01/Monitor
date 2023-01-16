<?php

namespace App\View\Components\Interface;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public string $text;
    public string $icon;
    public string $route;
    public string $type;
    public bool $filled;

    /**
     * Create the component instance.
     *
     * @param string $text
     * @param string $icon
     * @param string $route
     * @param string $type
     * @param bool $filled
     */
    public function __construct(string $text = '', string $icon = '', string $route = '#', string $type = 'btn-primary', bool $filled = false)
    {
        $this->text = $text;
        $this->icon = $icon;
        $this->route = $route;
        $this->type = $type;
        $this->filled = $filled;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return ($this->text == '' && $this->icon !== '') ?
            view('components.interface.button.icon-button') :
            view('components.interface.button.button');
    }
}
