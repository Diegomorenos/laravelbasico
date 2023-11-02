@extends ('layouts.app')
@section('content')

<div class="table-responsive container">
    <table class="table table-info">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CODIGO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
            <tr class="">
                <td scope="row">{{ $country->id }}</td>
                <td>{{ $country->codigo_pais }}</td>
                <td>{{ $country->nombre }}</td>
                <td><form action="{{ route('country.destroy', ['id' => $country->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection