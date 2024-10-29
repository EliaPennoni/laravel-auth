@extends('layouts.app')

@section('page-title', 'Tuuti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td> {{ $project->title }} </td>
                            <td> {{ $project->slug }} </td>
                            <td>{{ $project->price }}</td>
                            <td> {{ $project->image }} </td>
                            <td>{{ $project->timestamps }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
