<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Person
 * 
 * @property int $id
 * @property int $unitid
 * @property string $gender
 * @property string $givenname
 * @property string $middleInitial
 * @property string $surname
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $email
 * @property string $telephone
 * @property string $mothermaidenname
 * @property \Carbon\Carbon $birthday
 * @property string $CCType
 * @property string $CCNumber
 * @property int $CW2
 * @property string $CCExpires
 * @property string $ssn
 *
 * @package App\Models
 */
class Person extends Eloquent
{

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        //'id' => 'int',
        //'unitid' => 'int',
        //'CW2' => 'int'
    ];

    protected $dates = [
        'birthday'
    ];

    protected $fillable = [
        'unitid',
        'gender',
        'givenname',
        'middleInitial',
        'surname',
        'street',
        'city',
        'state',
        'zip',
        'country',
        'email',
        'telephone',
        'mothermaidenname',
        'birthday',
        'CCType',
        'CCNumber',
        'CW2',
        'CCExpires',
        'ssn'
    ];
}
