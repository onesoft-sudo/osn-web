<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * The links of the navbar.
     *
     * @var string[]
     */
    public readonly array $links;

    /**
     * Create a new component instance.
     */
    public function __construct(?string $links = null)
    {
        if ($links) {
            $this->links = explode(" ", $links);
        }
        else {
            $this->links = $this->defaultLinks();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.navbar', [
            'links' => []
        ]);
    }

    /**
     * Get the default links of the navbar.
     *
     * @return string[]
     */
    private function defaultLinks(): array
    {
        return config("links")["links"]();
    }
}
