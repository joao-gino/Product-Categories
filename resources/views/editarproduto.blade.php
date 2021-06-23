@extends('layouts.app', ['current' => 'produtos'])

@section('body')
    
<div class="card border">
    <div class="card-body">
        <form action="/produtos/{{$prod->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto:</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto" value="{{$prod->nome}}">
            </div>
            <div class="form-group">
                <label for="estoqueProduto">Estoque do Produto:</label>
                <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Estoque" value="{{$prod->estoque}}">
            </div>
            <div class="form-group">
                <label for="precoProduto">Preço do Produto:</label>
                <input type="text" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço" value="{{$prod->preco}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>

@endsection