<?php

namespace WDevs\LaravelAvesapi\Endpoints;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;

class SearchEndpoint extends BaseEndpoint
{

    public function __construct(PendingRequest $client)
    {
        parent::__construct($client);
        $this->setEndpoint('search');
    }


    /**
     * @param string $query
     * @param array  $parameters
     *
     * @return array
     * @throws RequestException
     */
    public function searchFor($query, array $parameters = [])
    {
        $parameters['query'] = $query;

        return $this->get($this->endpoint, $parameters);
    }
}
