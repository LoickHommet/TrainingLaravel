@extends('layouts.layout')


@section('title')
{{$training->name}}
@endsection

@section('content')
<h1>Bienvenue sur notre formation</h1>

<form action="{{route('update', $training->id)}} " method="post" class="row justify-items: center;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row bg-light m-3 p-3">
    <div >
        <label for="text" >name</label> :</label>
        <input type="text"  name="name" class="form-control" required value="{{$training->name}}">
    </div >
    <div c text-align="center">
        <label for="text" >prix :</label>
        <input type="text"name="price" class="form-control" required value="{{$training->price}}">
    </div >
    <div >
        <label for="text"  >Description :</label>
        <textarea type="text" name="description" class="form-control" required > {{$training->description}}</textarea>
    </div >
    <div class="col-6">
        <p class="mb-5">Ecrit le {{$training->created_at->format('d/m/Y')}}</p>
    </div>
    <div class="button my-3">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href=" {{route('traininglist')}} " class="btn btn-warning">
            Retour a la liste
        </a>
    </div>
    </div>
</form>



@endsection



