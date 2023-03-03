<?php

namespace App\View\Components;

use App\Models\Client;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $clientName = null,
        public ?string $logo = null,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('clients.components.avatar', [
            'clientName' => $this->clientName,
            'logo' => $this->logo,
            'clientInitials' => $this->clientName !== null ? $this->getInitials($this->clientName) : null,
        ]);
    }

    private function getInitials(string $name): string
    {
        return strtoupper(
            implode(
                '',
                array_map(
                    fn (string $word) => $word[0],
                    explode(' ', $name)
                ),
            ),
        );
    }
}
