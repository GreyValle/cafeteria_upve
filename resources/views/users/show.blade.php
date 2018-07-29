@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>

                <div class="card-body">
                	<p><strong>Nombre: </strong>{{ $user->name }}</p>
                	<p><strong>Email: </strong>{{ $user->email }}</p>
                	<p><strong>Password: </strong>{{ $user->password }}</p>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
