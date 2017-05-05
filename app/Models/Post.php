<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Post
 * 
 * @property int $UNITID
 * @property string $INSTNM
 * @property string $ADDR
 * @property string $CITY
 * @property string $STABBR
 * @property int $ZIP
 * @property string $ZIPPlus
 * @property int $FIPS
 * @property int $OBEREG
 * @property string $CHFNM
 * @property string $CHFTITLE
 * @property string $GENTELE
 * @property string $FAXTELE
 * @property int $EIN
 * @property int $OPEID
 * @property int $OPEFLAG
 * @property string $WEBADDR
 * @property string $ADMINURL
 * @property string $FAIDURL
 * @property string $APPLURL
 * @property string $NPRICURL
 * @property int $SECTOR
 * @property int $ICLEVEL
 * @property int $CONTROL
 * @property int $HLOFFER
 * @property int $UGOFFER
 * @property int $GROFFER
 * @property int $HDEGOFR1
 * @property int $DEGGRANT
 * @property int $HBCU
 * @property int $HOSPITAL
 * @property int $MEDICAL
 * @property int $TRIBAL
 * @property int $LOCALE
 * @property int $OPENPUBL
 * @property string $ACT
 * @property int $NEWID
 * @property int $DEATHYR
 * @property string $CLOSEDAT
 * @property int $CYACTIVE
 * @property int $POSTSEC
 * @property int $PSEFLAG
 * @property int $PSET4FLG
 * @property int $RPTMTH
 * @property string $IALIAS
 * @property int $INSTCAT
 * @property int $CCBASIC
 * @property int $CCIPUG
 * @property int $CCIPGRAD
 * @property int $CCUGPROF
 * @property int $CCENRPRF
 * @property int $CCSIZSET
 * @property int $CARNEGIE
 * @property int $LANDGRNT
 * @property int $INSTSIZE
 * @property int $CBSA
 * @property int $CBSATYPE
 * @property int $CSA
 * @property int $NECTA
 * @property int $F1SYSTYP
 * @property string $F1SYSNAM
 * @property int $F1SYSCOD
 * @property int $COUNTYCD
 * @property string $COUNTYNM
 * @property int $CNGDSTCD
 * @property float $LONGITUD
 * @property float $LATITUDE
 *
 * @package App\Models
 */
class Post extends Eloquent
{
	protected $table = 'post';
	protected $primaryKey = 'UNITID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'UNITID' => 'int',
		'ZIP' => 'int',
		'FIPS' => 'int',
		'OBEREG' => 'int',
		'EIN' => 'int',
		'OPEID' => 'int',
		'OPEFLAG' => 'int',
		'SECTOR' => 'int',
		'ICLEVEL' => 'int',
		'CONTROL' => 'int',
		'HLOFFER' => 'int',
		'UGOFFER' => 'int',
		'GROFFER' => 'int',
		'HDEGOFR1' => 'int',
		'DEGGRANT' => 'int',
		'HBCU' => 'int',
		'HOSPITAL' => 'int',
		'MEDICAL' => 'int',
		'TRIBAL' => 'int',
		'LOCALE' => 'int',
		'OPENPUBL' => 'int',
		'NEWID' => 'int',
		'DEATHYR' => 'int',
		'CYACTIVE' => 'int',
		'POSTSEC' => 'int',
		'PSEFLAG' => 'int',
		'PSET4FLG' => 'int',
		'RPTMTH' => 'int',
		'INSTCAT' => 'int',
		'CCBASIC' => 'int',
		'CCIPUG' => 'int',
		'CCIPGRAD' => 'int',
		'CCUGPROF' => 'int',
		'CCENRPRF' => 'int',
		'CCSIZSET' => 'int',
		'CARNEGIE' => 'int',
		'LANDGRNT' => 'int',
		'INSTSIZE' => 'int',
		'CBSA' => 'int',
		'CBSATYPE' => 'int',
		'CSA' => 'int',
		'NECTA' => 'int',
		'F1SYSTYP' => 'int',
		'F1SYSCOD' => 'int',
		'COUNTYCD' => 'int',
		'CNGDSTCD' => 'int',
		'LONGITUD' => 'float',
		'LATITUDE' => 'float'
	];

	protected $fillable = [
		'INSTNM',
		'ADDR',
		'CITY',
		'STABBR',
		'ZIP',
		'ZIPPlus',
		'FIPS',
		'OBEREG',
		'CHFNM',
		'CHFTITLE',
		'GENTELE',
		'FAXTELE',
		'EIN',
		'OPEID',
		'OPEFLAG',
		'WEBADDR',
		'ADMINURL',
		'FAIDURL',
		'APPLURL',
		'NPRICURL',
		'SECTOR',
		'ICLEVEL',
		'CONTROL',
		'HLOFFER',
		'UGOFFER',
		'GROFFER',
		'HDEGOFR1',
		'DEGGRANT',
		'HBCU',
		'HOSPITAL',
		'MEDICAL',
		'TRIBAL',
		'LOCALE',
		'OPENPUBL',
		'ACT',
		'NEWID',
		'DEATHYR',
		'CLOSEDAT',
		'CYACTIVE',
		'POSTSEC',
		'PSEFLAG',
		'PSET4FLG',
		'RPTMTH',
		'IALIAS',
		'INSTCAT',
		'CCBASIC',
		'CCIPUG',
		'CCIPGRAD',
		'CCUGPROF',
		'CCENRPRF',
		'CCSIZSET',
		'CARNEGIE',
		'LANDGRNT',
		'INSTSIZE',
		'CBSA',
		'CBSATYPE',
		'CSA',
		'NECTA',
		'F1SYSTYP',
		'F1SYSNAM',
		'F1SYSCOD',
		'COUNTYCD',
		'COUNTYNM',
		'CNGDSTCD',
		'LONGITUD',
		'LATITUDE'
	];
}
