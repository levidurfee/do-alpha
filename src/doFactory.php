<?php

namespace wappr\DigitalOcean;

use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

/**
 * Class doFactory.
 */
class doFactory
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
        return self::exec('Create', $actionType, $params, $client);
    }

    /**
     * @param string      $actionType
     * @param array       $params
     * @param Client|null $client
     *
     * @return mixed
     */
    public static function delete(string $actionType, array $params, Client $client = null)
    {
        return self::exec('Delete', $actionType, $params, $client);
    }

    /**
     * @param string $type
     * @param string $actionType
     * @param array  $params
     * @param Client $client
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    protected static function exec(string $type, string $actionType, array $params, Client $client)
    {
        // If client isn't passed, instantiate a new one now.
        if ($client == null) {
            $client = new Client;
        }

        // Create a variable with the full namespace path of the action class.
        $actionClass = "wappr\\DigitalOcean\\Actions\\$actionType";
        // Check to make sure the class exists.
        if (!class_exists($actionClass)) {
            throw new \InvalidArgumentException('Action does not exist');
        }
        // Instantiate the action class.
        $action = new $actionClass;

        // Create a new Request method that matches the action type. Using reflection so it can pass
        // data to the construct.
        $request = new ReflectionClass('wappr\DigitalOcean\Models\\'.$type.'\\'.$type.rtrim($actionType, 's').'Request');
        $instance = $request->newInstanceArgs($params);

        $method = strtolower($type);
        // Return the Response object.
        return $action->{$method}($client, $instance);
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
