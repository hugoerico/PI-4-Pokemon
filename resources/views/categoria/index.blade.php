<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Lista de Categorias</title>
</head>
<body>
@include('layouts.menu')
    <main class="container mt-5">
@if(session()->has('sucesso'))
<div>
{{session()->get('sucesso')}}
</div>
@endif

<a href="{{Route('categoria.create')}}" class="btn btn-primary">Criar Categoria</a>


<div >
    <table class="table table-striped">
        <thead>
            <tr>
                 <th>
                    id
                </th>
                <th>
                    nome
                </th>
                <th>
                    opções
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
            <td>{{$categoria->id}}</td>
             <td>{{$categoria->nome}}  {{$categoria->produtos()->count()}} </td>
            
                <td>

                    <a href="{{Route('categoria.edit',$categoria->id)}}" class="btn btn-warning">editar</a>

                    <a href="{{Route('categoria.destroy',$categoria->id)}}" class="btn btn-danger">apagar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </main>
</body>
</html>