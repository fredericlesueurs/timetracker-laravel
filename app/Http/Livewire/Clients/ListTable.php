<?php

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ListTable extends Component
{
    use WithPagination;

    public function delete(int $id)
    {
        Client::where('id', $id)->delete();
    }

    public function render(): Factory|View|Application
    {
        return view('clients.livewire.list-table', [
            'clients' => Client::paginate(10),
        ]);
    }
}
