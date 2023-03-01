@extends('layouts.app')

@section('title', 'Edition de '.$client->name)

@section('breadcrumb')
    <x-layouts::breadcrumbs class="hidden lg:flex" :breadcrumbs="Breadcrumbs::generate('clients.edit', $client)" />
@endsection

@section('breadcrumb_mobile')
    <x-layouts::breadcrumbs class="lg:hidden" :breadcrumbs="Breadcrumbs::generate('clients.edit', $client)" />
@endsection

@section('content')
    <form>
        <div class="flex mt-4 mb-8 justify-between px-4">
            <div class="flex-none flex flex-row items-center">
                <x-avatar class="w-24 text-3xl" :client="$client" />
                <input type="text" class="ml-4 input input-lg input-bordered w-full max-w-xs" defaultValue={{ $client->name }} />
            </div>
            <div class="flex-wrap flex items-center">
                <a href="#">
                    <button class="btn btn-sm btn-primary">détails</button>
                </a>
                <button class="btn btn-sm btn-error ml-2">supprimer</button>
            </div>
        </div>
        <div class="p-5 grid grid-flow-row-dense grid-cols-1 2xl:grid-cols-2 gap-12">
            <div class="card bg-base-100 shadow-xl flex flex-col">
                <div class="card-body">
                    <h3 class="card-title text-3xl font-medium mb-2">Contact</h3>
                    <div class="grid gap-4 grid-cols-1 xl:grid-cols-2">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Nom du contact</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.contact_name} {...register('contact_name')} />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Adresse</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.address} {...register('address')} />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Code postal</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.zip_code} {...register('zip_code')} />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Ville</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.city} {...register('city')} />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.email} {...register('email')} />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Téléphone</span>
                            </label>
                            <input type="text" class="input input-md input-bordered w-full"
                                   defaultValue={client.phone} {...register('phone')} />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl flex flex-col">
                <div class="card-body flex">
                    <h3 class="card-title text-3xl font-medium mb-2">Commentaires</h3>
                    <div class="mt-2 h-full">
                            <textarea class="textarea textarea-bordered w-full h-full"
                                      defaultValue={client.comments} {...register('comments')}></textarea>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl flex flex-col mb-16 2xl:col-span-2">
                <div class="card-body flex">
                    <h3 class="card-title text-3xl font-medium mb-2">Description</h3>
                    <div class="mt-2 h-full">
                            <textarea class="textarea textarea-bordered w-full h-full"
                                      defaultValue={client.description} {...register('description')}></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 h-16 w-full bg-base-100 shadow-2xl flex lg:pl-80 ">
            <div class="pl-12 flex items-center">
                <button class="btn btn-sm btn-success">sauvegarder</button>
            </div>
        </div>
    </form>
@endsection
