<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
	protected $fillable = ['cd_cli', 'nome','cd_atv','nom_atv','cd_nat','nom_nat'];

	
}