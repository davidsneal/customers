@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="alert alert-{{ $alert_class }}">
			  <strong>{{ $alert_message }}</strong>
			</div>
		</div>
	</div>
</div>
@endsection
