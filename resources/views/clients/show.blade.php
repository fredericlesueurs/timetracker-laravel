@extends('layouts.app')

@section('title', 'Détails de '. $client->name)

@section('breadcrumb')
    <x-layouts::breadcrumbs class="hidden lg:flex" :breadcrumbs="Breadcrumbs::generate('clients.show', $client)" />
@endsection

@section('breadcrumb_mobile')
    <x-layouts::breadcrumbs class="lg:hidden" :breadcrumbs="Breadcrumbs::generate('clients.show', $client)" />
@endsection

@section('content')
    <div class="flex mt-4 mb-8 justify-between px-4">
        <div class="flex-none flex flex-row items-center">
            <x-avatar class="text-3xl w-24" :client="$client" />
            <h2 class="text-2xl font-bold align-middle ml-4">{{ $client->name }}</h2>
        </div>
        <div class="flex-wrap btn-group items-center">
            <a href="{{ route('clients.edit', ['client' => $client]) }}">
                <button class="btn btn-sm btn-primary">éditer</button>
            </a>
        </div>
    </div>
    <div class="p-5 grid grid-flow-row-dense grid-cols-1 2xl:grid-cols-2 gap-12">
        <div class="card bg-base-100 shadow-xl flex flex-col @if($client->comments === null) xl:col-span-2 @endif">
            <div class="card-body">
                <h3 class="card-title text-3xl font-medium mb-2">Contact</h3>
                @if($client->contact_name !== null)
                    <div class="mt-2">
                        <span class="font-medium">Nom du contact:</span>
                        <span class="ml-2">{{ $client->contact_name }}</span>
                    </div>
                @endif
                @if($client->address !== null || $client->zip_code !== null || $client->city === null)
                    <div class="mt-2">
                        <span class="font-medium">Adresse:</span>
                        <span class="ml-2">{{ $client->address }} {{ $client->zip_code }} {{ $client->city }}</span>
                    </div>
                @endif
                @if($client->email !== null)
                    <div class="mt-2">
                        <span class="font-medium">Email:</span>
                        <span class="ml-2">{{ $client->email }}</span>
                    </div>
                @endif
                @if($client->phone !== null)
                    <div class="mt-2">
                        <span class="font-medium">Téléphone:</span>
                        <span class="ml-2">{{ $client->phone }}</span>
                    </div>
                @endif
            </div>
        </div>
        @if($client->comments !== null)
            <div class="card bg-base-100 shadow-xl flex flex-col">
                <div class="card-body">
                    <h3 class="card-title text-3xl font-medium mb-2">Commentaires</h3>
                    <div class="mt-2">
                        <span>{{  $client->comments }}</span>
                    </div>
                </div>
            </div>
        @endif
        @if($client->description !== null)
            <div class="card bg-base-100 shadow-xl flex flex-col 2xl:col-span-2">
                <div class="card-body">
                    <h3 class="card-title text-3xl font-medium mb-2">Description</h3>
                    <div class="mt-2">
                        <span>{{ $client->description }}</span>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
