<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// added to keep controller cleaner
use App\Customer;
use Request;
use Validator;
use Response;
use View;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all customers
		$customers = Customer::paginate(5);
		
		// return the customers index page
		return view('customers.index', ['customers' => $customers]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// get posted inputs
		$data = Request::input('data');
		parse_str($data, $data);

		// prepare for validation
		$validator = Validator::make(
		    array(
		    	'first_name' => $data['first_name'],
		    	'last_name'  => $data['last_name'],
		    	'address_1'  => $data['address_1'],
		    	'address_2'  => $data['address_2'],
		    	'town' 		 => $data['town'],
		    	'county' 	 => $data['county'],
		    	'postcode' 	 => $data['postcode'],
		    	'age' 		 => $data['age'],
		    	'email' 	 => $data['email']
		    ),
		    array(
		    	'first_name' => 'max:50',
		    	'last_name'  => 'required|max:50',
		    	'address_1'  => 'required|max:50',
		    	'address_2'  => 'max:50',
		    	'town' 		 => 'required|max:50',
		    	'county' 	 => 'max:50',
		    	'postcode' 	 => 'required|max:10',
		    	'age' 		 => 'max:3',
		    	'email' 	 => 'email'
		    )
		);

		// if validation fails
		if ($validator->fails())
		{
			return Response::json(array(
				'status' => 'error',
				'message' => 'Posted fields failed validation',
				'alert_class' => 'alert-warning',
				));
		}

		// if no id is set
		if(empty($data['id']))
		{
			// initiate class
			$customer = new Customer;
		}
		// or we're updating an existing customer
		else
		{
			// get the existing customer as an object
			$customer = Customer::find($data['id']);
		}
		
		// prepare data	
		$customer->first_name 	= $data['first_name'];
    	$customer->last_name 	= $data['last_name'];
    	$customer->address_1  	= $data['address_1'];
    	$customer->address_2  	= $data['address_2'];
    	$customer->town		 	= $data['town'];
    	$customer->county 	 	= $data['county'];
    	$customer->postcode 	= $data['postcode'];
    	$customer->age	 		= (empty($data['age']) ? NULL : $data['age']);
    	$customer->email	 	= $data['email'];
		
		// if saved successfully
		if($customer->save())
		{
			// return success alert and redirect
			return Response::json(array(
				'status' 		=> 'success',
				'redirect'		=> '/admin/customers/edit/'.$customer->id,
				'message' 		=> 'Customer saved',
				'alert_class' 	=> 'alert-success',
				));
		}
		// failed to save
		else
		{
			return Response::json(array(
				'status' => 'error',
				'message' => 'Failed to save the customer',
				'alert_class' => 'alert-danger',
				));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id = 0)
	{
		// typecast if needed
		$id = (int) $id;
		
		// if no id is set
		if($id == 0)
		{
			// initiate class
			$customer = new Customer;
		}
		// or we're updating an existing customer
		else
		{
			// get the existing customer as an object
			$customer = Customer::find($id);
		}
		
		// creating new or editing existing
		if($id === 0 || ! empty($customer))
		{		
			// show edit screen
			return response()->view('customers.edit', ['customer' => $customer]);
		}
		// no matching customer found
		else
		{
			// prepare error data
			$data = [
				'alert_class' 	=> 'warning',
				'alert_message' => 'Unable to find a customer with this ID',
			];
			return response()->view('errors.general', $data);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
