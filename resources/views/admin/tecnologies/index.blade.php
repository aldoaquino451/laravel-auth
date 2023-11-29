@extends('layouts.admin')

@section('content')
    <h2 class="my-4">Lista delle Tecnologie</h2>

    <div class=" w-50">

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success " role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.tecnologies.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nuova Tecnologia" name="name">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary" type="button">Aggiungi</button>
                </div>
            </div>
        </form>

        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Versione</th>
                    <th scope="col" style="width: 155px">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnologies as $tecnology)
                    <tr>
                        <th scope="row">{{ $tecnology->id }}</th>
                        <td class="text-capitalize">{{ $tecnology->name }}</td>
                        <td class="text-capitalize">{{ $tecnology->version }}</td>
                        <td>
                            <a href="#" class="btn btn-warning d-inline-block">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.tecnologies.destroy', $tecnology) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $tecnologies->links() }}
    </div>
@endsection
