<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{
    protected $client;

    public function __construct(Client  $client)
    {
        $this->client = $client;
    }
    protected function get($url)
    {
        $response = $this->client->request('GET', $url);
        return json_decode($response->getBody()->getContents());
    }
    protected function post($url, $data)
    {
        $response = $this->client->post($url, $data);
        $respuesta = json_decode($response->getBody()->getContents());
        $respuesta->statusCode = $response->getStatusCode();
        return $respuesta;
    }
    protected function put($url, $data)
    {
        $response = $this->client->request('PUT', $url, $data);
        return $response;
    }
    protected function delete($url)
    {
        $response = $this->client->request('delete', $url);
        return json_decode($response->getBody()->getContents());
    }
}
