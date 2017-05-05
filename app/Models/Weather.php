<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Weather
 * 
 * @property string $state
 * @property string $place
 * @property string $station
 * @property string $latitude
 * @property string $longitude
 * @property int $elevation
 * @property string $country
 *
 * @package App\Models
 */
class Weather extends Eloquent
{
	protected $table = 'weather';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'elevation' => 'int'
	];

	protected $fillable = [
		'state',
		'place',
		'station',
		'latitude',
		'longitude',
		'elevation',
		'country'
	];
}
