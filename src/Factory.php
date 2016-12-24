<?php

namespace wappr\DigitalOcean;

use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

/**
 * Class Factory.
 */
class Factory
{
    /**
     * @param string      $actionType
     * @param array       $params
     * @param Client|null $client
     *
     * @return mixed
     */
    public static function create(string $actionType, array $params, Client $client = null)
    {
        // If client isn't passed, instantiate a new one now.
        if ($client == null) {
            $client = new Client;
        }

        // Create a variable with the full namespace path of the action class.
        $actionClass = "wappr\\DigitalOcean\\Actions\\$actionType";
        // Instantiate the action class.
        $action = new $actionClass;

        // Create a new Request method that matches the action type. Using reflection so it can pass
        // data to the construct.
        $request = new ReflectionClass('wappr\DigitalOcean\Models\Create\Create'.rtrim($actionType, 's').'Request');
        $instance = $request->newInstanceArgs($params);

        // Return the Response object.
        return $action->create($client, $instance);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public static function json(ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents());
    }
}
