@extends('layouts/app')

@section('content')
<div class="container py-5 ">
    <h1 class="mb-3">Elenco dei miei progetti</h1>

    <table class="table mb-5 ">
        <thead>
            <tr>
                <th class="col">Nome</th>
                <th class="col">Link progetto</th>
                <th class="col">Dettagli progetto</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>

                <td>{{$project->name}}</td>
                <td><a href="{{$project->url}}" class="btn btn-outline-primary">Vedi i miei progetti!</a></td>
                <td><a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-outline-info">Scopri di più</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Aggiungi un progetto!</a>
</div>
@endsection