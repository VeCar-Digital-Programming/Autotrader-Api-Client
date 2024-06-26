<?php

namespace Vecar\AutotraderApiClient;

use Vecar\AutotraderApiClient\Api\Advertisers;
use Vecar\AutotraderApiClient\Api\Authentication;
use Vecar\AutotraderApiClient\Api\Leads;
use Vecar\AutotraderApiClient\Api\Search;
use Vecar\AutotraderApiClient\Api\Stock;
use Vecar\AutotraderApiClient\Api\Taxonomy;
use Vecar\AutotraderApiClient\Api\Valuations;
use Vecar\AutotraderApiClient\Api\VehicleMetrics;
use Vecar\AutotraderApiClient\Api\Vehicles;

class Client extends AbstractClient
{
    use ManagesHttpAccessTokens;

    /**
     * Set client options from array.
     *
     * @param array $options
     *
     * @return AbstractClient
     */
    protected function configureFromArray(array $options): AbstractClient
    {
        if (isset($options['access_token'])) {
            $this->setAccessToken($options['access_token']);
        }

        $baseUri = 'https://api.autotrader.co.uk';

        if (isset($options['sandbox']) && $options['sandbox'] === true) {
            $baseUri = 'https://api-sandbox.autotrader.co.uk';
        }

        $this->http->setBaseUri($baseUri);

        return $this;
    }

    /**
     * Access Token Management.
     *
     * @see https://developers.autotrader.co.uk/api#authentication
     *
     * @return Authentication
     */
    public function authentication(): Authentication
    {
        return new Authentication($this);
    }

    /**
     * Stock Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#stock-endpoint
     *
     * @return Stock
     */
    public function stock(): Stock
    {
        return new Stock($this);
    }

    /**
     * Taxonomy Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#taxonomy-endpoint
     *
     * @return Taxonomy
     */
    public function taxonomy(): Taxonomy
    {
        return new Taxonomy($this);
    }

    /**
     * Valuations Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#valuations-endpoint
     *
     * @return Valuations
     */
    public function valuations(): Valuations
    {
        return new Valuations($this);
    }

    /**
     * Vehicles Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#vehicles-endpoint
     *
     * @return Vehicles
     */
    public function vehicles(): Vehicles
    {
        return new Vehicles($this);
    }

    /**
     * Vehicle Metrics Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#vehicle-metrics-endpoint
     *
     * @return VehicleMetrics
     */
    public function vehicleMetrics(): VehicleMetrics
    {
        return new VehicleMetrics($this);
    }

    /**
     * Search Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#search-endpoint
     *
     * @return Search
     */
    public function adverts(): Search
    {
        return new Search($this);
    }

    /**
     * Leads Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#leads-api
     *
     * @return Leads
     */
    public function leads(): Leads
    {
        return new Leads($this);
    }

    /**
     * Advertisers Endpoint.
     *
     * @see https://developers.autotrader.co.uk/api#search-advertisers
     *
     * @return Advertisers
     */
    public function advertisers(): Advertisers
    {
        return new Advertisers($this);
    }
}
