@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-1 well bs-component">
			<form class="form-horizontal" data-toggle="validator" role="form">
			  <fieldset>
			    <legend>Edit/Create Customer</legend>
			    <div class="form-group">
			      <label for="first_name" class="col-lg-4 control-label">First Name</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="first_name" placeholder="First Name" max=50>
			      </div>
			      <div class="help-block with-errors"></div>
			    </div>
			    <div class="form-group">
			      <label for="last_name" class="col-lg-4 control-label label-required">Last Name</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="last_name" placeholder="Last Name" max=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="address_1" class="col-lg-4 control-label label-required">Address 1</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="address_1" placeholder="Address 1" max=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="address_2" class="col-lg-4 control-label">Address 2</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="address_2" placeholder="Address 2">
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="town" class="col-lg-4 control-label label-required">Town</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="town" placeholder="Town" max=50 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="county" class="col-lg-4 control-label">County</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="county" placeholder="County">
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="postcode" class="col-lg-4 control-label label-required">Postcode</label>
			      <div class="col-lg-8">
			        <input type="text" class="form-control" id="postcode" placeholder="Postcode" min=5 max=10 required>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="age" class="col-lg-4 control-label">Age</label>
			      <div class="col-lg-8">
			        <input type="number" class="form-control" id="age" placeholder="Age" min=18 max=65>
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="email" class="col-lg-4 control-label">Email</label>
			      <div class="col-lg-8">
			        <input type="email" class="form-control" id="email" placeholder="Email">
			        <div class="help-block with-errors"></div>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-8 col-lg-offset-4">
			        <button type="submit" class="btn btn-success pull-right">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
		<div class="col-md-3 col-md-offset-1 well bs-component">
			<h2>Information</h2>
			<p>Please take a moment to complete the form. All fields that are required are flagged by <span class="label-required"></span>'s</p>
		</div>
	</div>
</div>
@endsection
