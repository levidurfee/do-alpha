<?php

namespace wappr\DigitalOcean\Contracts\Factory;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Client\Client;

/**
 * Class Factory.
 *
 * @method static mixed create(string $actionType, array $params = [], Client $client = null)
 * @method static mixed retrieve(string $actionType, array $params = [], Client $client = null)
 * @method static mixed update(string $actionType, array $params = [], Client $client = null)
 * @method static mixed delete(string $actionType, array $params = [], Client $client = null)
 */
interface FactoryInterface
{
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
    public static function run(string $action, string $actionMethod, array $requestParams = [], Client $client = null);

    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public static function json(ResponseInterface $response);
}
