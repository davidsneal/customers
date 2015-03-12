<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model {

	// the table for the model
	protected $table = 'customers';
	
	// guarded fields
	protected $guarded = ['id'];
	
	// mass assignable fields
	protected $fillable = ['first_name', 'last_name', 'email'];
	
	// enable soft deletes
	use SoftDeletes;
    protected $dates = ['deleted_at'];

}
