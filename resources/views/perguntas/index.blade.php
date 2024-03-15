@extends('adminlte::page')
@section('title', 'Formularioss')
@section('content_header')
	<div class="cotainer-fluid">
		<h5><label >Formularios para responder</label></h5>

	</div>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary btn-block">Formulários Respondidos</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('formulario.create') }}" class="btn btn-secondary  btn-block">Formulário</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
