@extends('layouts.app')

@section('title', 'Edition de '.$client->name)

@section('breadcrumb')
    <x-layouts::breadcrumbs class="hidden lg:flex" :breadcrumbs="Breadcrumbs::generate('clients.edit', $client)" />
@endsection

@section('breadcrumb_mobile')
    <x-layouts::breadcrumbs class="lg:hidden" :breadcrumbs="Breadcrumbs::generate('clients.edit', $client)" />
@endsection

@section('content')
    <div class="flex flex-col mt-4 justify-between px-4 md:flex-row">
        <div class="flex-none flex flex-row items-center">
            <x-avatar class="w-24 text-3xl" :client-name="$client->name" :logo="$client->logo" />
            <div>
                <input type="text" name="name" class="ml-4 input input-lg input-bordered w-full max-w-xs @error('name') input-error @enderror" value="{{ $client->name }}" form="edit"/>
                @error('name')<span class="ml-4 mt-2 block text-error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="flex-wrap flex items-center mt-8 md:mt-0">
            <a class="btn btn-sm btn-primary" href="{{ route('clients.show', ['client' => $client]) }}">
                détails
            </a>
            <form class="mb-0" action="{{ route('clients.destroy', ['client' => $client]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-error ml-2">supprimer</button>
            </form>
        </div>
    </div>
    <form action="{{ route('clients.update', ['client' => $client]) }}" method="POST" id="edit">
        @csrf
        @method('PUT')
        <div class="mt-8 p-5 grid grid-flow-row-dense grid-cols-1 2xl:grid-cols-2 gap-12">
            <div class="card bg-base-100 shadow-xl flex flex-col">
                <div class="card-body">
                    <h3 class="card-title text-3xl font-medium mb-2">Contact</h3>
                    <div class="grid gap-4 grid-cols-1 xl:grid-cols-2">
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="contact_name">Nom du contact</x-shared::forms.label>
                            <x-shared::forms.input fieldName="contact_name" :value="$client->contact_name"/>
                        </x-shared::forms.form-control>
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="address">Adresse</x-shared::forms.label>
                            <x-shared::forms.input fieldName="address" :value="$client->address"/>
                        </x-shared::forms.form-control>
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="zip_code">Code postal</x-shared::forms.label>
                            <x-shared::forms.input fieldName="zip_code" :value="$client->zip_code"/>
                        </x-shared::forms.form-control>
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="city">Ville</x-shared::forms.label>
                            <x-shared::forms.input fieldName="city" :value="$client->city"/>
                        </x-shared::forms.form-control>
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="email">Email</x-shared::forms.label>
                            <x-shared::forms.input fieldName="email" :value="$client->email"/>
                        </x-shared::forms.form-control>
                        <x-shared::forms.form-control>
                            <x-shared::forms.label for="phone">Téléphone</x-shared::forms.label>
                            <x-shared::forms.input fieldName="phone" :value="$client->phone"/>
                        </x-shared::forms.form-control>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl flex flex-col h-96 2xl:h-auto">
                <div class="card-body flex">
                    <h3 class="card-title text-3xl font-medium mb-2">Commentaires</h3>
                    <div class="mt-2 h-full">
                        <textarea class="textarea textarea-bordered w-full h-full" name="comments">{{ $client->comments }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl flex flex-col mb-16 h-96 2xl:col-span-2">
                <div class="card-body flex">
                    <h3 class="card-title text-3xl font-medium mb-2">Description</h3>
                    <div class="mt-2 h-full">
                        <textarea class="textarea textarea-bordered w-full h-full" name="description">{{ $client->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 h-16 w-full bg-base-100 shadow-2xl flex lg:pl-80 ">
            <div class="pl-12 flex items-center">
                <button type="submit" class="btn btn-sm btn-success">sauvegarder</button>
            </div>
        </div>
    </form>
@endsection
