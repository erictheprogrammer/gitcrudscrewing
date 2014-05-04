<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'body' => 'required'
	);

	public function creator()
	{
		return $this->belongsTo('User', 'user_id');
	}
}
