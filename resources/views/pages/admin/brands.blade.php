@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <livewire:components.page-header :header="'All Brand'" :subHeader="'View All Brands'" :snippet="'View a list of all created brands'" />
    <livewire:components.brand.brand-list />
@endsection
