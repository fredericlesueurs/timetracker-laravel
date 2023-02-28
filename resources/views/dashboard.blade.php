@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <x-layouts::breadcrumbs class="hidden lg:flex" :breadcrumbs="Breadcrumbs::generate('dashboard')" />
@endsection

@section('breadcrumb_mobile')
    <x-layouts::breadcrumbs class="lg:hidden" :breadcrumbs="Breadcrumbs::generate('dashboard')" />
@endsection

@section('content')
@endsection
