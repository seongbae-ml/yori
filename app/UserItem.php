<?php namespace yori;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model {

	//
	protected $fillable = array('id','user_id','item_id','name','expire_date','purchase_date','notes');

}
