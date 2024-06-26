<?php

namespace Vecar\AutotraderApiClient\Api;

use Vecar\AutotraderApiClient\Api\Builders\MetricRequestBuilder;

class VehicleMetrics extends AbstractApi
{
    /**
     * Lookup a vehicles metrics.
     *
     * @param string               $advertiserId
     * @param MetricRequestBuilder $builder
     *
     * @return array
     *
     * @example
     * $request = MetricRequestBuilder::create();
     *
     * $request->vehicle()
     *  ->setDerivativeId('ABC123')
     *  ->setFirstRegisteredDate('2020-11-01')
     *  ->setOdometerReadingMiles(8000);
     *
     * $valuation = $api->vehicleMetrics()->lookup(12345, $request)
     */
    public function lookup(string $advertiserId, MetricRequestBuilder $builder)
    {
        return $this->_post(
            '/vehicle-metrics',
            ['advertiserId' => $advertiserId],
            $builder->toJson()
        );
    }
}
