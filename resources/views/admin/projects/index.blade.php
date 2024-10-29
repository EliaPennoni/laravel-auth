@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1>tutti i progetti</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Data</th>
                        <th scope="col">Vai</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td> {{ $project->title }} </td>
                            <td> {{ $project->slug }} </td>
                            <td>{{ $project->price }}</td>
                            <td>{{ $project->description }}</td>
                            <td> {{ $project->image }} </td>
                            <td>{{ $project->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                    class="btn btn-success">Visualizza</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.create', ['project' => $project->id]) }}"
                                    class="btn btn-success">crea</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
