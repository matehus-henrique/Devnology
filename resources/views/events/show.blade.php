@extends('layouts.main')

@section('title', '$forca->title')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events//{{$forca->image}}" class="img-fluid" alt="{{$forca->title}}">
      </div>
      <div id="info-container" class="col-md-6">
          <h1>{{$forca->title}}</h1>
          <p class="event-title"><ion-icon name="location-outline"></ion-icon>{{$forca->descricao}}</p>

          <p class="event-title"><ion-icon name="star-outline"></ion-icon><h3>{{$forca->preco}}</h3></p>

          <a href="#" class="btn btn-primary" id="event-submit">Compra</a>
            <h3>Itens que acompanha com produto</h3>
           <ul id="items-list">
               @foreach ($forca->items as $item)
               <li>
                   <ion-icon name="play-outline" > </ion-icon><span>{{$item}}</span>
               </li>

               @endforeach

           </ul>


      </div>

      <div class="col-md-12" id="description-container">
          <h3>Sobre produto</h3>
          <p class="event-description">{{$forca->descricao}}</p>

      </div>

    </div>

</div>


@endsection
