@extends('layouts.layout')


@section('title')
{{$training->name}}
@endsection

@section('content')
<h1>Bienvenue sur notre formation</h1>

<div class="row bg-light m-3 p-3">
    <div class="col-6">
        <h3>{{$training->name}}</h3>
        <p class="mb-5">{{$training->description}}</p>
        <br>
        <p class="mb-5">Ecrit le {{$training->created_at->format('d/m/Y')}}</p>
    </div>
    <div class="button my-3">
        <a href=" {{route('traininglist')}} " class="btn btn-warning">
            Retour a la liste
        </a>        
    </div>
</div>
@endsection



