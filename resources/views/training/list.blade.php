@extends('layouts.layout')


@section('title')




@section('content')


<h1>Nos formation</h1>
@if(sizeof($training) > 0)
<ul>
   
    @foreach ($training as $trains )

        <li>
            <div class="card mb-3">
                <img src="{{asset("storage/, $trains->image")}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"> {{$trains->name}}</h5>
                  <p class="card-text">{{$trains->description}}</p>
                  <div>
                    <ul>
                      <p class="card-text">Category</p>
                    @foreach ($category as $categories)
                      <li>
                        <span class="card-category">{{$categories->name}}</span>
                      </li>                    
                  @endforeach   
                  <p class="card-text">Type</p>     
                  <li>
                    <span class="card-category">{{$trains->type}}</span>
                  </li>        
                    </ul>

                  </div>
      
                  <a href="{{route('detail', $trains->id)}} " class="btn btn-primarie">
                    Voir la formation
                </a> 
                @if (Auth::check())
                <a href="{{route('update', $trains->id)}}" class="btn btn-warning">Modifier la formation</a>
                </div>
                @endif
             </div>
           </li>
    @endforeach

</ul>
@else
<p>Il n'y a pas de formation</p>
@endif
@endsection
 
