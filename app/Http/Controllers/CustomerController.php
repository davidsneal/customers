<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Customer;

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
		return view('customers.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		
		// get customer
		$customer = Customer::find($id);
		
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
