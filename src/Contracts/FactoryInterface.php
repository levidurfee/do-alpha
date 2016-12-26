<?php
/**
 * Created by PhpStorm.
 * User: levi
 * Date: 12/25/16
 * Time: 9:53 PM.
 */

namespace wappr\DigitalOcean\Contracts;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Client;

/**
 * Class doFactory.
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
