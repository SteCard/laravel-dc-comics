@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2>DC Comics</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Visualizza Fumetti</a>
            </div>
        </div>
    </div>
@endsection