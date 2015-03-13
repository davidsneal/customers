@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1 class="heading-search pull-left">Customers</h1>
			<form class="navbar-form pull-right form-heading" role="search" action="" method="get">
		        <div class="form-group">
		        	<input name="search" type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
		    </form>
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Last Name</th>
			      <th>Address 1</th>
			      <th>Town</th>
			      <th>Postcode</th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
				  	@if(count($customers) === 0)
				  		<tr class="text-center warning">
					  		<td colspan="6">
						  		No customers found
						  		@if( ! empty($search))
						  			for '<b>{{ $search }}</b>'
						  		@endif
					  		</td>
				  		</tr>
				  	@else
				  		@if( ! empty($search))
				  			<tr class="text-center success">
					  		<td colspan="6">
						  		{!! $customers->total() !!} customers found for '<b>{{ $search }}</b>'
					  		</td>
				  		</tr>
						@endif
					  	@foreach($customers as $customer)
						    <tr>
						      <td>{{ $customer->id }}</td>
						      <td>{{ $customer->last_name }}</td>
						      <td>{{ $customer->address_1 }}</td>
						      <td>{{ $customer->town }}</td>
						      <td>{{ $customer->postcode }}</td>
						      <td><a href="/admin/customers/edit/{{ $customer->id }}"><i class="fa fa-pencil"></i></a></td>
						    </tr>
						@endforeach
					@endif
			  </tbody>
			</table>
			<div class="text-center">
				{!! $customers->render() !!}
			</div>
		</div>
	</div>
</div>
@endsection
