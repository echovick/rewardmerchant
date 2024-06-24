@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <section class="offer-dedicated-body section-padding">
        <div class="container">
            <div class="row pt-lg-4">
                <livewire:components.brand.brand-detail />
            </div>
        </div>
    </section>
@endsection
