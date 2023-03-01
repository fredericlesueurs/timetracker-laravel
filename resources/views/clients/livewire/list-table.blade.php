<div>
    <table class="table table-compact md:table-normal w-full">
        <thead class="bg-base-100">
            <tr>
                <th class="bg-inherit">
                    <label>
                        <input type="checkbox" class="checkbox"/>
                    </label>
                </th>
                <th class="bg-inherit">Nom du client</th>
                <th class="bg-inherit"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr class="hover">
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox"/>
                        </label>
                    </th>
                    <td>
                        <div class="flex items-center space-x-3">
                            <x-avatar :client="$client" class="text-md w-10 md:text-2xl md:w-16" />
                            <div>
                                <div class="font-bold">{{ $client->name }}</div>
                                @if($client->contact_name !== null)
                                    <div class="text-sm opacity-50">{{ $client->contact_name }}</div>
                                @endif
                            </div>
                        </div>
                    </td>
                    <th>
                        <div class="dropdown dropdown-bottom dropdown-end md:hidden">
                            <label tabindex="0" class="btn btn-ghost btn-xs">Actions</label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box">
                                <li>
                                    <a href="{{ route('clients.show', ['client' => $client]) }}">Détails</a>
                                </li>
                                <li>
                                    <a href="{{ route('clients.edit', ['client' => $client]) }}">Edition</a>
                                </li>
                                <li>
                                    <button wire:click="delete({{ $client->id }})">Supprimer</button>
                                </li>
                            </ul>
                        </div>
                        <a class="hidden md:inline" href="{{ route('clients.show', ['client' => $client]) }}">
                            <button class="btn btn-ghost btn-xs">détails</button>
                        </a>
                        <a class="hidden md:inline" href="{{ route('clients.edit', ['client' => $client]) }}">
                            <button class="btn btn-ghost btn-xs">édition</button>
                        </a>
                        <button wire:click="delete({{ $client->id }})" class="hidden md:inline btn btn-ghost btn-xs">supprimer</button>
                    </th>
                </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-base-100">
            <tr>
                <th class="bg-inherit"></th>
                <th class="bg-inherit">Nom du client</th>
                <th class="bg-inherit"></th>
            </tr>
        </tfoot>
    </table>
    <div class="mt-4">
        {{ $clients->links() }}
    </div>
</div>
