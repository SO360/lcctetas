<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterCheck extends Model {
	protected $table = 'register_checks';
	private $n = 0;
	private $sum;

	protected $fillable = [
		'name', 'last_name', 'mother_last_name', 'email', 'cellphone', 'created',
	];

	public function getFullLastNameAttribute() {
		return ucfirst(strtolower($this->last_name)) . ' ' . ucfirst(strtolower($this->mother_last_name));
	}

	public function getcountAttribute() {
		return $this->attributes['id'] = $this->n + 1;
	}

}
