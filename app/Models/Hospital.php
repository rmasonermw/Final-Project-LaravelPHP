<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 03 May 2017 00:53:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Hospital
 * 
 * @property int $ProviderID
 * @property string $HospitalName
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $ZIPCode
 * @property string $CountyName
 * @property int $PhoneNumber
 * @property string $HospitalType
 * @property string $HospitalOwnership
 * @property string $EmergencyServices
 * @property string $MeetsCriteriaForMeaningfulUseOfEHRs
 * @property string $HospitalOverallRating
 * @property string $HospitalOverallRatingFootnote
 * @property string $MortalityNationalComparison
 * @property string $MortalityNationalComparisonFootnote
 * @property string $SafetyOfCareNationalComparison
 * @property string $SafetyOfCareNationalComparisonFootnote
 * @property string $ReadmissionNationalComparison
 * @property string $ReadmissionNationalComparisonFootnote
 * @property string $PatientExperienceNationalComparison
 * @property string $PatientExperienceNationalComparisonFootnote
 * @property string $EffectivenessOfCareNationalComparison
 * @property string $EffectivenessOfCareNationalComparisonFootnote
 * @property string $TimelinessOfCareNationalComparison
 * @property string $TimelinessOfCareNationalComparisonFootnote
 * @property string $EfficientUseOfMedicalImagingNationalComparison
 * @property string $EfficientUseOfMedicalImagingNationalComparisonFootnote
 *
 * @package App\Models
 */
class Hospital extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ProviderID' => 'int',
		'PhoneNumber' => 'int'
	];

	protected $fillable = [
		'ProviderID',
		'HospitalName',
		'Address',
		'City',
		'State',
		'ZIPCode',
		'CountyName',
		'PhoneNumber',
		'HospitalType',
		'HospitalOwnership',
		'EmergencyServices',
		'MeetsCriteriaForMeaningfulUseOfEHRs',
		'HospitalOverallRating',
		'HospitalOverallRatingFootnote',
		'MortalityNationalComparison',
		'MortalityNationalComparisonFootnote',
		'SafetyOfCareNationalComparison',
		'SafetyOfCareNationalComparisonFootnote',
		'ReadmissionNationalComparison',
		'ReadmissionNationalComparisonFootnote',
		'PatientExperienceNationalComparison',
		'PatientExperienceNationalComparisonFootnote',
		'EffectivenessOfCareNationalComparison',
		'EffectivenessOfCareNationalComparisonFootnote',
		'TimelinessOfCareNationalComparison',
		'TimelinessOfCareNationalComparisonFootnote',
		'EfficientUseOfMedicalImagingNationalComparison',
		'EfficientUseOfMedicalImagingNationalComparisonFootnote'
	];
}
