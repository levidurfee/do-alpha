<?php

namespace wappr\DigitalOcean\Factory;

use Psr\Http\Message\ResponseInterface;
use ReflectionClass;
use wappr\DigitalOcean\Client\Client;
use wappr\DigitalOcean\Contracts\Factory\FactoryInterface;

/**
 * Class Factory.
 *
 * @method static mixed create(string $actionType, array $params = [], Client $client = null)
 * @method static mixed retrieve(string $actionType, array $params = [], Client $client = null)
 * @method static mixed update(string $actionType, array $params = [], Client $client = null)
 * @method static mixed delete(string $actionType, array $params = [], Client $client = null)
 */
class Factory implements FactoryInterface
{
    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        /* Check to see if an array of args was passed. */
        if (isset($arguments[1])) {
            $args = $arguments[1];
        } else {
            $args = [];
        }

        /* Check and see if a Client was passed. */
        if (isset($arguments[2])) {
            $client = $arguments[2];
        } else {
            $client = null;
        }

        /* return the response */
        return self::run($arguments[0], ucfirst($name), $args, $client);
    }

    /**
     * @param string      $action
     * @param string      $actionMethod
     * @param array       $requestParams
     * @param Client|null $client
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function run(string $action, string $actionMethod, array $requestParams = [], Client $client = null)
    {
        // If client isn't passed, instantiate a new one now.
        if ($client == null) {
            $client = new Client;
        }

        // Check if the action class exists and instantiate it.
        $actionClass = "wappr\\DigitalOcean\\Actions\\$action";
        if (!class_exists($actionClass)) {
            throw new \InvalidArgumentException('Action does not exist.');
        }
        $actionObject = new $actionClass;

        // Get the type hinted interface of the request param.
        $actionClass = new ReflectionClass($actionClass);
        $params = $actionClass->getMethod($actionMethod)->getParameters();

        // If the method requires a request object then create a string that represents the namespace and class
        // then instantiate it, pass the client and request object to the action method.
        if (count($params) > 1) {
            $requestClass = str_replace(['Contracts\\', 'Interface'], ['', 'Request'], $params[1]->getClass()->name);
            // After we get the type, we go ahead and instantiate it then pass the params.
            $request = new ReflectionClass($requestClass);
            $requestObject = $request->newInstanceArgs($requestParams);

            // Using the action class, call the method with the client and request object params.
            return $actionObject->{$actionMethod}($client, $requestObject);
        }

        return $actionObject->{$actionMethod}($client);
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
