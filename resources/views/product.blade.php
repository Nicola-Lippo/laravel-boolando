@extends('layouts.app')
<!-- creo il contenuto che andrà a coprire i buchi-->
@section('main')
    <main>
        <div class="container">
            <h1>{{ $title }}</h1>
            <div class="d-flex">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-4">
                            <h3>{{ $product['name'] }}</h3>
                            <img class="img" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
                                alt="{{ $product['frontImage'] }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
