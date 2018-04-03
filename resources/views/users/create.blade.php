@extends('layouts.master')
 
@section('content')

	<div class="row">
	    <div class="col-lg-12">
	        <div class="pull-left">
	            <h2>Add new user</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('users.index') }}">
	            Back
	        	</a>
	        </div>
	    </div>
	</div>

	@if ($errors = session('errors'))
		<div class="alert alert-danger">
			<strong><i class="fa fa-exclamation-circle"></i></strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
        		<strong>Name:</strong>
        		{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
    		</div>
    	</div>
    	<div class="col-xs-12 col-sm-12 col-md-12">
    		<div class="form-group">
        		<strong>Email:</strong>
        		{!! Form::text('email', null, ['placeholder' => 'E-mail','class' => 'form-control']) !!}
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-success">Submit</button>
        	</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection