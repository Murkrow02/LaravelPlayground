@extends('layouts.app')

@section('content')

    <style>
        .card{
            text-align: center;
            width: 20rem;
            margin-bottom: 10px;
        }
        .card-img-top{
            object-fit: contain !important;
            padding: 15px;
        }
    </style>

    <div class="container-sm">
        <div class="row">
            <div onclick="window.location.href='search'" class="col-sm-6" style="display: flex; justify-content: center;">
                <div class="card">
                    <img src="https://cdn0.iconfinder.com/data/icons/very-basic-2-android-l-lollipop-icon-pack/24/search-512.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Cerca</h2>
                        <p class="card-text">Cerca giochi da aggiungere alla tua libreria</p>
                    </div>
                </div>
            </div>

            <div onclick="window.location.href='library'" class="col-sm-6" style="display: flex; justify-content: center;">
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/212/212807.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Libreria</h2>
                        <p class="card-text">Visualizza tutti i tuoi giochi, divisi per categoria</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
