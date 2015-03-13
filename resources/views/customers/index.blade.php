@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Customers</h1>
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Last Name</th>
			      <th>Address 1</th>
			      <th>Town</th>
			      <th>Postcode</th>
			    </tr>
			  </thead>
			  <tbody>
				  	@foreach($customers as $customer)
					    <tr>
					      <td>{{ $customer->id }}</td>
					      <td>{{ $customer->last_name }}</td>
					      <td>{{ $customer->address_1 }}</td>
					      <td>{{ $customer->town }}</td>
					      <td>{{ $customer->postcode }}</td>
					    </tr>
					@endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection
