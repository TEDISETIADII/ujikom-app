@extends('layouts.app')

@push('css')
@endpush

@section('content')
    <div class="container my-5">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded-4">
            @livewire('home')
        </div>
    </div>
@endsection

@push('js')
@endpush