<?php

namespace Vecar\AutotraderApiClient\Api\Builders;

use Vecar\AutotraderApiClient\Api\Enums\AxleConfigurations;
use Vecar\AutotraderApiClient\Api\Enums\BodyTypes\BikeBodyTypes;
use Vecar\AutotraderApiClient\Api\Enums\BodyTypes\CarBodyTypes;
use Vecar\AutotraderApiClient\Api\Enums\BodyTypes\MotorhomeBodyTypes;
use Vecar\AutotraderApiClient\Api\Enums\BodyTypes\VanBodyTypes;
use Vecar\AutotraderApiClient\Api\Enums\CabTypes;
use Vecar\AutotraderApiClient\Api\Enums\Conditions;
use Vecar\AutotraderApiClient\Api\Enums\FuelTypes;
use Vecar\AutotraderApiClient\Api\Enums\OwnershipConditions;
use Vecar\AutotraderApiClient\Api\Enums\TransmissionTypes;
use Vecar\AutotraderApiClient\Api\Enums\VehicleTypes;
use Vecar\AutotraderApiClient\Api\Enums\WheelbaseTypes;

class VehicleInfoBuilder extends AbstractSchemableBuilder
{
    /**
     * Attribute Schema.
     *
     * @var array
     */
    protected $schema = [
        'ownershipCondition'                => OwnershipConditions::class,
        'registration'                      => 'string',
        'vin'                               => 'string',
        'make'                              => 'string',
        'model'                             => 'string',
        'generation'                        => 'string',
        'derivative'                        => 'string',
        'derivativeId'                      => 'string',
        'vehicleType'                       => VehicleTypes::class,
        'trim'                              => 'string',
        'bodyType'                          => [BikeBodyTypes::class, CarBodyTypes::class, VanBodyTypes::class, MotorhomeBodyTypes::class],
        'fuelType'                          => FuelTypes::class,
        'cabType'                           => CabTypes::class,
        'transmissionType'                  => TransmissionTypes::class,
        'wheelbaseType'                     => WheelbaseTypes::class,
        'roofHeightType'                    => 'string',
        'drivetrain'                        => 'string',
        'seats'                             => 'integer',
        'doors'                             => 'integer',
        'co2EmissionGPKM'                   => 'integer',
        'topSpeedMPH'                       => 'integer',
        'zeroToSixtyMPHSeconds'             => 'float',
        'badgeEngineSizeLitres'             => 'float',
        'engineCapacityCC'                  => 'integer',
        'enginePowerBHP'                    => 'integer',
        'fuelCapacityLitres'                => 'double',
        'emissionClass'                     => 'string',
        'fuelEconomyNEDCExtraUrbanMPG'      => 'float',
        'fuelEconomyNEDCUrbanMPG'           => 'float',
        'fuelEconomyNEDCCombinedMPG'        => 'float',
        'fuelEconomyWLTPLowMPG'             => 'float',
        'fuelEconomyWLTPMediumMPG'          => 'float',
        'fuelEconomyWLTPHighMPG'            => 'float',
        'fuelEconomyWLTPExtraHighMPG'       => 'float',
        'fuelEconomyWLTPCombinedMPG'        => 'float',
        'bootSpaceSeatsUpLitres'            => 'double',
        'insuranceGroup'                    => 'string',
        'insuranceSecurityCode'             => 'string',
        'firstRegistrationDate'             => 'date',
        'colour'                            => 'string',
        'style'                             => 'string',
        'subStyle'                          => 'string',
        'lengthMM'                          => 'integer',
        'heightMM'                          => 'integer',
        'widthMM'                           => 'integer',
        'payloadLengthMM'                   => 'integer',
        'payloadWidthMM'                    => 'integer',
        'payloadHeightMM'                   => 'integer',
        'payloadWeightKG'                   => 'integer',
        'minimumKerbWeightKG'               => 'integer',
        'grossVehicleWeightKG'              => 'integer',
        'cylinders'                         => 'integer',
        'bootSpaceSeatsDownLitres'          => 'integer',
        'odometerReadingMiles'              => 'integer',
        'motExpiryDate'                     => 'date',
        'warrantyMonthsOnPurchase'          => 'integer',
        'serviceHistory'                    => 'string',
        'plate'                             => 'string',
        'yearOfManufacture'                 => 'string',
        'interiorCondition'                 => Conditions::class,
        'tyreCondition'                     => Conditions::class,
        'bodyCondition'                     => Conditions::class,
        'exDemo'                            => 'bool',
        'keys'                              => 'bool',
        'v5Certificate'                     => 'bool',
        'previousOwners'                    => 'integer',
        'driverPosition'                    => 'string',
        'axleConfiguration'                 => AxleConfigurations::class,
        'upholstery'                        => 'string',
        'interiorColour'                    => 'string',
        'exteriorFinish'                    => 'string',
        'lastServiceOdometerReadingMiles'   => 'integer',
        'lastServiceDate'                   => 'date',
        'engineNumber'                      => 'string',
        'fuelDelivery'                      => 'string',
        'gears'                             => 'integer',
        'valves'                            => 'integer',
        'startStop'                         => 'bool',
        'enginePowerPS'                     => 'integer',
        'engineTorqueNM'                    => 'integer',
        'engineTorqueLBFT'                  => 'float',
        'batteryChargeTime'                 => 'integer',
        'batteryQuickChargeTime'            => 'integer',
        'batteryRangeMiles'                 => 'integer',
        'batteryCapacityKWH'                => 'integer',
        'batteryUsableCapacityKWH'          => 'integer',
        'wheelbaseMM'                       => 'integer',
        'grossCombinedWeightKG'             => 'integer',
        'grossTrainWeightKG'                => 'integer',
        'boreMM'                            => 'integer',
        'strokeMM'                          => 'integer',
        'cylinderArrangement'               => 'string',
        'engineMake'                        => 'string',
        'valveGear'                         => 'string',
        'axles'                             => 'integer',
        'countryOfOrigin'                   => 'string',
        'driveType'                         => 'string',
        'payloadVolumeCubicMetres'          => 'integer',
        'rde2Compliant'                     => 'bool',
        'sector'                            => 'string',
    ];

    protected $cast = [
        'seats',
        'doors',
        'co2EmissionGPKM',
        'topSpeedMPH',
        'zeroToSixtyMPHSeconds',
        'badgeEngineSizeLitres',
        'engineCapacityCC',
        'enginePowerBHP',
        'fuelCapacityLitres',
        'fuelEconomyNEDCExtraUrbanMPG',
        'fuelEconomyNEDCUrbanMPG',
        'fuelEconomyNEDCCombinedMPG',
        'fuelEconomyWLTPLowMPG',
        'fuelEconomyWLTPMediumMPG',
        'fuelEconomyWLTPHighMPG',
        'fuelEconomyWLTPExtraHighMPG',
        'fuelEconomyWLTPCombinedMPG',
        'bootSpaceSeatsUpLitres',
        'lengthMM',
        'heightMM',
        'widthMM',
        'payloadLengthMM',
        'payloadWidthMM',
        'payloadHeightMM',
        'payloadWeightKG',
        'minimumKerbWeightKG',
        'grossVehicleWeightKG',
        'cylinders',
        'bootSpaceSeatsDownLitres',
        'odometerReadingMiles',
        'warrantyMonthsOnPurchase',
        'exDemo',
        'keys',
        'v5Certificate',
        'previousOwners',
        'lastServiceOdometerReadingMiles',
        'engineNumber',
        'fuelDelivery',
        'gears',
        'valves',
        'startStop',
        'enginePowerPS',
        'engineTorqueNM',
        'engineTorqueLBFT',
        'batteryChargeTime',
        'batteryQuickChargeTime',
        'batteryRangeMiles',
        'batteryCapacityKWH',
        'batteryUsableCapacityKWH',
        'wheelbaseMM',
        'grossCombinedWeightKG',
        'grossTrainWeightKG',
        'boreMM',
        'strokeMM',
        'axles',
        'payloadVolumeCubicMetres',
        'rde2Compliant',
    ];
}