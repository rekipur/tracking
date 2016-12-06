@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li><a href="{{ url('/admin/admins') }}">Registrasi</a></li>
				<li class="active">Form Daftar</li>
			</ul>
			<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2 class="panel-title">Form Registrasi</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('admins.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
					@include('admins._form')
					{!! Form::close() !!}
				</div>				
			</div>
			</div>
		</div>
		</div>
	</div>
@endsection