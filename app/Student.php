<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = [
		'name', 'email', 'campus', 'mobile','rendezvous','etat','niveau','niv','dossier','rvori','choix','rvsim','rvcamp','reponse'
	];

}
