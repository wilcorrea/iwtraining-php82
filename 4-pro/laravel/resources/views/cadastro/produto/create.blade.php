@extends ('layouts/site')

@section ('title', 'Cadastrar Produto')

@section ('content')
    <form 
        action="/produtos"
        method="POST"
    >
        <div class="mb-3">
            <label for="exampleInputNome" class="form-label">Nome</label>
            <input 
                type="text" 
                class="form-control" 
                id="exampleInputNome" 
                aria-describedby="nomeHelp"
                name="nome"
            >
            <div id="nomeHelp" class="form-text">Digite um nome de produto</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputValor" class="form-label">Valor</label>
            <input 
                type="number"
                class="form-control"
                id="exampleInputValor"
                name="valor"
            >
        </div>
        <div class="mb-3 form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
            >
            <label class="form-check-label" for="exampleCheck1">Ativo</label>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        @csrf
    </form>
@endsection