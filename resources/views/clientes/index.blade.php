@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">{{-- <div class="col-xs-12 col-sm-12"> --}}
      <div class="card">
        <div class="card-header text-center">
          <h2> Lista Clientes
          </h2>
        </div>
        <div class="card-body">
          <a href="{{ route('cliente.create') }}" class="btn btn-primary float-left" data-toggle="tooltip" title="¡Desde aquí puedes añadir un nuevo cliente!" data-placement="right">Añadir Cliente</a>
          <nav class="navbar navbar-light  float-right">
            <form method="GET" action="{{ route('cliente.index') }}"  role="search" class="form-inline">
              <input name="nombre" class="form-control mr-sm-2" type="search" placeholder="Nombre del cliente" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </nav>
          <div class="table-responsive">
          @include('Cliente.frangment.info')
            <table id="mytable" class="table table-hover table-sm">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Dirección</th>
                  <th>Fecha N</th>
                  <th>Tel</th>
                  <th>Sexo</th>
                  <th>Estudios</th>
                  <th>Estatu soc</th>
                  <th>Hijos</th>
                  <th>Ocupación</th>
                  <th>Saldo</th>
                  <th>Estatus</th>
                  <th colspan="3">Acciones</th>
                    
                </tr>
              </thead>
              <tbody>
                @if($clientes->count())  
                  @foreach($clientes as $cliente)  
                    <tr>
                      <td>{{$cliente->id}}</td>
                      <td>{{$cliente->nombre}}</td>
                      <td>{{$cliente->apellidos}}</td>
                      <td>{{$cliente->direccion}}</td>
                      <td>{{$cliente->fecha_nac}}</td>
                      <td>{{$cliente->telefono}}</td>
                      <td>{{$cliente->sexo}}</td>
                      <td>{{$cliente->escolaridad}}</td>
                      <td>{{$cliente->estatus_social}}</td>
                      <td>{{$cliente->cant_hijos}}</td>
                      <td>{{$cliente->ocupacion}}</td>
                      <td>{{$cliente->saldo}}</td>
                      <td>{{$cliente->estatus}}</td>
                      <td><a class="btn btn-outline-secondary btn-xs" href="{{action('ClientesController@show', $cliente->id)}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                      <td><a class="btn btn-outline-primary btn-xs" href="{{action('ClientesController@edit', $cliente->id)}}" ><i class="fa fa-edit"></i></span></a></td>
                      <td>
                         @if(Auth::user()->hasRole('admin'))
                        <form action="{{action('ClientesController@destroy', $cliente->id)}}" method="POST">
                           {{csrf_field()}}
                           <input name="_method" type="hidden" value="DELETE">
         
                           <button class="btn btn-outline-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        @endif  
                      </td>
                    </tr>
                   @endforeach 
                @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div> <br>            
          <div class="row">
            <div class="col-sm-6 align-items-center">{{ $clientes->links() }}</div>
           
            <div class="col-sm-6" style="text-align: right;"><a href="#" title="Eliminar" data-toggle="popover" data-placement="left" data-content="Para eliminar solo click en boton rojo">Ayuda</a> </div>
          </div>
          

        </div> 
                
      </div>
    </div>
  </div>
</div>
@endsection