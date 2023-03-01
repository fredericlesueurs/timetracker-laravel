<?php

use App\Models\Client;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('clients.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Clients', route('clients.index'));
});

Breadcrumbs::for('clients.show', function (BreadcrumbTrail $trail, Client $client) {
    $trail->parent('clients.index');
    $trail->push($client->name, route('clients.show', ['client' => $client]));
});

Breadcrumbs::for('clients.edit', function (BreadcrumbTrail $trail, Client $client) {
    $trail->parent('clients.show', $client);
    $trail->push('Edition', route('clients.edit', ['client' => $client]));
});
