@extends('layouts.app')

@section('title', 'Liste des clients')

@section('breadcrumb')
    <x-layouts::breadcrumbs class="hidden lg:flex" :breadcrumbs="Breadcrumbs::generate('clients.index')" />
@endsection

@section('breadcrumb_mobile')
    <x-layouts::breadcrumbs class="lg:hidden" :breadcrumbs="Breadcrumbs::generate('clients.index')" />
@endsection

@section('content')
    <div class="flex mt-4 mb-8 justify-between">
        <div class="flex-none">
            <h2 class="text-2xl font-bold align-middle">Clients</h2>
        </div>
        <div class="flex-wrap btn-group">
            <a href="{{ route('clients.create') }}">
                <button class="btn btn-sm btn-primary">Créer</button>
            </a>
        </div>
    </div>
    <div class="w-full">
        <livewire:clients.list-table/>
    </div>
@endsection
