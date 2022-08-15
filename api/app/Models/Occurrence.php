<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Occurrence extends Model{

	protected $table = 'omoccurrences';
	protected $primaryKey = 'occid';
	public $timestamps = false;

	protected $fillable = [ 'basisOfRecord', 'occurrenceID', 'catalogNumber', 'otherCatalogNumbers', 'family', 'scientificName', 'sciname', 'genus', 'specificEpithet', 'datasetID', 'organismID',
		'taxonRank', 'infraspecificEpithet', 'institutionCode', 'collectionCode', 'scientificNameAuthorship', 'taxonRemarks', 'identifiedBy', 'dateIdentified', 'identificationReferences',
		'identificationRemarks', 'identificationQualifier', 'typeStatus', 'recordedBy', 'recordNumber', 'associatedCollectors', 'eventDate', 'eventDate2', 'year', 'month', 'day', 'startDayOfYear',
		'endDayOfYear', 'verbatimEventDate', 'eventTime', 'habitat', 'substrate', 'fieldNotes', 'fieldnumber', 'eventID', 'occurrenceRemarks', 'informationWithheld', 'dataGeneralizations',
		'associatedTaxa', 'dynamicProperties', 'verbatimAttributes', 'behavior', 'reproductiveCondition', 'cultivationStatus', 'establishmentMeans', 'lifeStage', 'sex', 'individualCount',
		'samplingProtocol', 'samplingEffort', 'preparations', 'locationID', 'continent', 'parentLocationID', 'country', 'stateProvince', 'county', 'municipality', 'waterBody', 'islandGroup',
		'island', 'countryCode', 'locality', 'localitySecurity', 'localitySecurityReason', 'decimalLatitude', 'decimalLongitude', 'geodeticDatum', 'coordinateUncertaintyInMeters',
		'footprintWKT', 'coordinatePrecision', 'locationRemarks', 'verbatimCoordinates', 'georeferencedBy', 'georeferencedDate', 'georeferenceProtocol', 'georeferenceSources',
		'georeferenceVerificationStatus', 'georeferenceRemarks', 'minimumElevationInMeters', 'maximumElevationInMeters', 'verbatimElevation', 'minimumDepthInMeters', 'maximumDepthInMeters',
		'verbatimDepth', 'availability', 'disposition', 'storageLocation', 'modified', 'language', 'processingstatus', 'recordEnteredBy', 'duplicateQuantity', 'labelProject'];
	protected $hidden = [ 'scientificName', 'recordedbyid', 'associatedOccurrences', 'previousIdentifications', 'dynamicFields', 'institutionID', 'collectionID', 'genericcolumn1', 'genericcolumn2' ];

	public function collection(){
		return $this->belongsTo(Collection::class, 'collid', 'collid');
	}

	public function identification(){
		return $this->hasMany(OccurrenceIdentifications::class, 'occid', 'occid');
	}

	public function media(){
		return $this->hasMany(Media::class, 'occid', 'occid');
	}

	public function guid(){
	    return $this->hasOne(OccurrenceGuids::class, 'occid', 'occid');
	}

	public function portalPublications(){
		return $this->belongsToMany(PortalPublications::class, 'portaloccurrences', 'occid', 'pubid')->withPivot('targetOccid');;
	}


}