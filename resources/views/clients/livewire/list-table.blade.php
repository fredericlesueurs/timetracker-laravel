<div>
    <table class="table w-full">
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
                            <x-avatar :client="$client" class="text-2xl w-16" />
                            <div>
                                <div class="font-bold">{{ $client->name }}</div>
                                @if($client->contact_name !== null)
                                    <div class="text-sm opacity-50">{{ $client->contact_name }}</div>
                                @endif
                            </div>
                        </div>
                    </td>
                    <th>
                        <a href="{{ route('clients.show', ['client' => $client]) }}">
                            <button class="btn btn-ghost btn-xs">détails</button>
                        </a>
                        <a href="{{ route('clients.edit', ['client' => $client]) }}">
                            <button class="btn btn-ghost btn-xs">édition</button>
                        </a>
                        <a>
                            <button class="btn btn-ghost btn-xs">supprimer</button>
                        </a>
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
