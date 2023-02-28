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
        public Client $client,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('clients.components.avatar', [
            'client' => $this->client,
            'clientInitials' => $this->getInitials($this->client->name),
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
