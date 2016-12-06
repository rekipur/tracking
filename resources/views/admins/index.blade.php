@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li class="active">Registrasi</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tabel Registrasi</h2>
				</div>
				<div class="panel-body">
					<p><a class="btn btn-primary" href="{{ route('admins.create') }}">Tambah</a></p>
					{!! $html->table(['class'=>'table table-striped']) !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection