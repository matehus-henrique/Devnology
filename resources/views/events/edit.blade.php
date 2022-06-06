@extends('layouts.main')

@section('title', 'editar produto' . $forca->title)

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{$forca->title}}</h1>
    <form action="/events/update/{{$forca->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image"> imagem do produto</label>
            <input type="file" id="image" name="image" class="form-control">
            <img src="/img/events/{{$forca->image}}" alt="{{$forca->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title"> Nome do Produto</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome" value="{{$forca->title}}">

        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-contol" placeholder="Descrição do produto">{{$forca->descricao}}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione Itens  do Produto</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Contoles">Controles

            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Capa">Capas

            </div>
        </div>

        <div class="form-group">
            <label for="title">preço</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="preço" value="{{$forca->preco}}">

        </div>

        <div class="form-group">
            <label for="title">Quantidade</label>
            <input type="text" class="form-control" id="qntd" name="qntd" placeholder="Quantidade" value="{{$forca->qntd}}">

        </div>
        <input type="submit" class="btn btn-primary" value="Editar">

    </form>

</div>


@endsection
