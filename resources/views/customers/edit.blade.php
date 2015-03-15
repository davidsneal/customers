@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 col-md-offset-1 well bs-component">
			<h2>Information</h2>
			<p>Please take a moment to complete the form.</p><p>All fields that are <b>required</b> are flagged as such by a <span class="label-required"></span></p>
		</div>
		<div class="col-md-6 col-md-offset-1 well bs-component">
			<form id="form-customer" method="post" action="/admin/customers/create" class="form-horizontal" data-toggle="validator" role="form">
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="id" value="{{ $customer->id }}">
			  <fieldset>
			    <legend>
			    	@if($customer->id == '')
						New Customer
					@else
						Edit {{ $customer->first_name }}
					@endif
			    </legend>
			    <div class="form-group">
			      <label for="first_name" class="col-lg-4 control-label">First Name</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->first_name }}" type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength=50>
			      </div>
			      <div class="help-block with-errors"></div>
			    </div>
			    <div class="form-group">
			      <label for="last_name" class="col-lg-4 control-label label-required">Last Name</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->last_name }}" type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="address_1" class="col-lg-4 control-label label-required">Address 1</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->address_1 }}" type="text" class="form-control" id="address_1" name="address_1" placeholder="Address 1" maxlength=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="address_2" class="col-lg-4 control-label">Address 2</label>
			      <div class="col-lg-8">
			        <input  value="{{ $customer->address_2 }}"type="text" class="form-control" id="address_2" name="address_2" placeholder="Address 2" maxlength=50>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="town" class="col-lg-4 control-label label-required">Town</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->town }}" type="text" class="form-control" id="town" name="town" placeholder="Town" maxlength=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="county" class="col-lg-4 control-label">County</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->county }}" type="text" class="form-control" id="county" name="county" placeholder="County" maxlength=50>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="postcode" class="col-lg-4 control-label label-required">Postcode</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->postcode }}" type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode" maxlength=10 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="age" class="col-lg-4 control-label">Age</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->age }}" type="number" class="form-control" id="age" name="age" placeholder="Age" min=18 max=65>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="email" class="col-lg-4 control-label">Email</label>
			      <div class="col-lg-8">
			        <input value="{{ $customer->email }}" type="email" class="form-control" id="email" name="email" placeholder="Email">
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-8 col-lg-offset-4">
			        <button type="submit" class="btn btn-success pull-right btn-submit">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@endsection
