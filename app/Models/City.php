<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class City
 * 
 * @property string $country
 * @property string $asciiName
 * @property string $city
 * @property string $region
 * @property float $latitude
 * @property float $longitude
 *
 * @package App\Models
 */
class City extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'latitude' => 'float',
		'longitude' => 'float'
	];

	protected $fillable = [
		'country',
		'asciiName',
		'city',
		'region',
		'latitude',
		'longitude'
	];
}
