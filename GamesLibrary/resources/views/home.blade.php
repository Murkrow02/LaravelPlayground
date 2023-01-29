@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="search">Cerca</a>
                <a href="library">I tuoi giochi</a>
            </div>
        </div>
    </div>
</div>
@endsection
