@extends('welcome')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Agregar
  </button>

    <div class="table-responsive">
        <br>
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($productos as $producto)
                <tr class="">
                    <td scope="row">{{$i++}}</td>
                    <td>{{$producto->Categoria->nombre}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                            Editar
                          </button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                            Eliminar
                          </button>
                    </td>
                </tr>
                @include('producto.info')
                @endforeach
            </tbody>
        </table>
    </div>
    @include('producto.create')
    

@endsection