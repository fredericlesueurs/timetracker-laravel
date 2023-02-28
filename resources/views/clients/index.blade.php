@extends('layouts.app')

@section('title', 'Liste des clients')

@section('breadcrumb')

@endsection

@section('breadcrumb_mobile')

@endsection

@section('content')
    <div class="flex mt-4 mb-8 justify-between">
        <div class="flex-none">
            <h2 class="text-2xl font-bold align-middle">Clients</h2>
        </div>
        <div class="flex-wrap btn-group">
            <a to="#">
                <button class="btn btn-sm btn-primary">Créer</button>
            </a>
        </div>
    </div>
    <div class="overflow-x-auto w-full">
        <livewire:clients.list-table/>
    </div>
@endsection
