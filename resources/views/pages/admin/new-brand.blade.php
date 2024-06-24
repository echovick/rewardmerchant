@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <livewire:components.page-header :header="'New Brand'" :subHeader="'Create new Brand'" :snippet="'Fill in the details to create a new brand'" />
    <livewire:components.brand.new-brand-form />
@endsection
