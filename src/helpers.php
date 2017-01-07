<?php

use Psr\Http\Message\ResponseInterface;

if (!function_exists('json')) {
    function json(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents());
    }
}
