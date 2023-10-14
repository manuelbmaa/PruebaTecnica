@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Usuario creado correctamente',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    <div class="container-fluid">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h3 class="card-title m-0">Listado de usuarios registrados</h3>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Email</th>
                            <th>Habilidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $guest)
                            <tr>
                                <td>{{ $guest->id }}</td>
                                <td>{{ $guest->first_name }}</td>
                                <td>{{ $guest->last_name }}</td>
                                <td>{{ $guest->age }}</td>
                                <td>{{ $guest->email }}</td>
                                <td>{{ $guest->hability }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $guests->links() }}
            </div>
        </div>
    </div>
@endsection
