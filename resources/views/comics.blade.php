{{-- estendiamo il layout di app --}}
@extends('layouts.app')

{{-- estendiamo title in app --}}
@section('title','Comics')

{{-- estendiamo content in app --}}
@section('content')
    <section>
        <div class="container pt-5">
            <h1>Comics</h1>
            <h2>Guarda che belli i nostri fumetti</h2>
            <div class="row row-cols-4 py-4 row-gap-4">
                @foreach ($comics_list as $comic)
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top img-fluid" alt=" "style="width: 260px; height:360px">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title fs-6">Titolo: {{ $comic['title'] }}</h3>
                            <h5 class="card-subtitle fs-6">Serie: {{ $comic['series'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection