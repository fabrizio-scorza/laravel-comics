{{-- estendiamo il layout di app --}}
@extends('layouts.app')

{{-- estendiamo title in app --}}
@section('title','Books')

{{-- estendiamo content in app --}}
@section('content')
    <section>
        <div class="container pt-5">
            <h1>Books</h1>
            <h2>Guarda che belli i nostri libri</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure distinctio dolore sed corrupti fuga voluptatum vitae minima eaque eos iusto id a enim et, voluptates ad sunt. Suscipit, vel accusamus?</p>
        </div>
    </section>
@endsection