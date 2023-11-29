@php
    use App\Models\Project;
@endphp

@extends('layouts.admin')

@section('content')
    <h2 class="my-4">Lista dei Progetti</h2>

    <div class=" w-75">
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Progetto</th>
                    <th scope="col" style="width: 155px">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td class=" text-capitalize">{{ $project->name }}</td>
                        <td>{{ Project::formatDate($project->date) }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success d-inline-block">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-warning d-inline-block">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="" class="d-inline-block">
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $projects->links() }}
    </div>
@endsection
