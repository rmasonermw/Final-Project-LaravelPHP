<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Zip
 * 
 * @property string $zip_code
 * @property float $lat
 * @property float $lon
 * @property string $city
 * @property string $state_prefix
 * @property string $county
 * @property string $z_type
 * @property string $z_primary
 * @property string $worldregion
 * @property string $country
 * @property string $locationtext
 * @property string $location
 * @property string $population
 * @property int $housingunits
 * @property int $income
 * @property string $landarea
 * @property string $waterarea
 * @property string $decommisioned
 * @property string $militaryrestrictioncodes
 *
 * @package App\Models
 */
class Zip extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lat' => 'float',
		'lon' => 'float',
		'housingunits' => 'int',
		'income' => 'int'
	];

	protected $fillable = [
		'zip_code',
		'lat',
		'lon',
		'city',
		'state_prefix',
		'county',
		'z_type',
		'z_primary',
		'worldregion',
		'country',
		'locationtext',
		'location',
		'population',
		'housingunits',
		'income',
		'landarea',
		'waterarea',
		'decommisioned',
		'militaryrestrictioncodes'
	];
}
