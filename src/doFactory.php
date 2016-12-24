<?php

namespace wappr\DigitalOcean;

use Psr\Http\Message\ResponseInterface;
use ReflectionClass;

/**
 * Class doFactory.
 *
 * @method static mixed create(string $actionType, array $params, Client $client = null)
 * @method static mixed retrieve(string $actionType, array $params, Client $client = null)
 * @method static mixed update(string $actionType, array $params, Client $client = null)
 * @method static mixed delete(string $actionType, array $params, Client $client = null)
 */
class doFactory
{
    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        /* Check and see if a Client was passed */
        if (isset($arguments[2])) {
            $client = $arguments[2];
        } else {
            $client = null;
        }

        /* return the response */
        return self::exec(ucfirst($name), $arguments[0], $arguments[1], $client);
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
    protected static function exec(string $type, string $actionType, array $params, Client $client = null)
    {
        // If client isn't passed, instantiate a new one now.
        if ($client == null) {
            $client = new Client;
        }

        // Create a variable with the full namespace path of the action class.
        $actionClass = "wappr\\DigitalOcean\\Actions\\$actionType";
        // Check to make sure the class exists.
        if (!class_exists($actionClass)) {
            throw new \InvalidArgumentException('Action does not exist.');
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
