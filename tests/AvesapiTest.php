<?php

namespace WDevs\LaravelAvesapi\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Http\Client\RequestException;
use Orchestra\Testbench\TestCase;
use WDevs\LaravelAvesapi\LaravelAvesapi;
use WDevs\LaravelAvesapi\Providers\LaravelAvesapiServiceProvider;

class AvesapiTest extends TestCase
{

    /**
     * Define environment setup.
     *
     * @param Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('avesapi.api_key', env('AVESAPI_API_KEY'));
    }


    protected function getPackageProviders($app)
    {
        return [LaravelAvesapiServiceProvider::class];
    }


    /**
     * @test
     */
    function it_should_be_able_to_call_the_search_endpoint()
    {
        $api = new LaravelAvesapi();

        try {
            $response = $api->search()->searchFor('bitcoin', [
                'type' => 'web'
            ]);

            $this->assertTrue(isset($response['result']['organic_results']));

        } catch (RequestException $e) {
            $this->assertEquals(true, false);
        }
    }
}
