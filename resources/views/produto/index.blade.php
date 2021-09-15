<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>painel de Controle</title>
</head>

<body>
    @include('layouts.menu')
    <main class="container mt-5">
@if(session()->has('sucesso'))
<div>
{{session()->get('sucesso')}}
</div>
@endif

<a href="{{Route('produto.create')}}" class="btn btn-primary btn-sm">criar produto</a>


<div class="mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                 <th>
                    Imagem
                </th>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Quantidade
                </th>
                <th>
                    Pontos
                </th>
                <th>
                    Descrição
                </th>
             
                <th>
                    Categoria
                </th>
                <th>
                    Opções
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
            <td><img src="{{asset($produto->imagem)}}" style="width:35px"></td>
            <td>{{$produto->id}}</td>
             <td>{{$produto->nome}}</td>
             <td>{{$produto->quantidade}}</td>
             <td>{{$produto->preco}}</td>
             <td>{{$produto->descricao}}</td>
            
             <td>{{$produto->categoria->nome}}</td>
             

                <td>
                    <a href="http://" class="btn btn-sm btn-success">visualizar</a>

                    <a href="{{Route('produto.edit',$produto->id)}}" class="btn btn-sm btn-warning">editar</a>

                    <a href="{{Route('produto.destroy',$produto->id)}}" class="btn btn-sm btn-danger">apagar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</body>
</html>