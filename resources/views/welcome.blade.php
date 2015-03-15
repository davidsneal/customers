@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="jumbotron">
			  <h1>Customers</h1>
			  <p>A Laravel-powered web application, created for demonstration purposes.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="gravatar-div">
			    <ul class="gravatar-list">
				    @foreach($customers as $customer)
			        <li>
			          <img class="gravatar-img" src="http://www.gravatar.com/avatar/{!! md5($customer->email) !!}" alt="{{ $customer->last_name }}" data-toggle="modal" data-target="#customer-modal" data-name="{{ ($customer->first_name != '' ? $customer->first_name.' ' : null).$customer->last_name }}" data-address="{{ $customer->address_1.', '.$customer->town }}" />
			        </li>
			        @endforeach
			    </ul>
			</div>
		</div>
	</div>
</div>
<div id="customer-modal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
	  	<div class="col-md-2 col-md-offset-1">
			<img class="modal-gravatar-img" src="" />
		</div>
		<div class="col-md-6 col-md-offset-1">
			<p class="modal-address"></p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
