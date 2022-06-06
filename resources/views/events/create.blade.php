@extends('layouts.main')

@section('title', 'add- produto')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Adicionar produto</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image"> imagem do produto</label>
            <input type="file" id="image" name="image" class="form-control">

        </div>
        <div class="form-group">
            <label for="title"> Nome do Produto</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome">

        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-contol" placeholder="Descrição do produto"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione Itens  do Produto</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Contoles">Controles

            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Capa">Capa

            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Capa">Jogos

            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Capa">Garantia

            </div>
        </div>

        <div class="form-group">
            <label for="title">preço</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="preço">

        </div>

        <div class="form-group">
            <label for="title">Quantidade</label>
            <input type="text" class="form-control" id="qntd" name="qntd" placeholder="Quantidade">

        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar">

    </form>

</div>


@endsection
