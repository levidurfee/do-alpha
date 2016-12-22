<?php

namespace wappr\DigitalOcean\Contracts;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ClientInterface.
 */
interface ClientInterface
{
    /**
     * @param string         $action
     * @param ModelInterface $model
     *
     * @return ResponseInterface
     */
    public function post(string $action, ModelInterface $model): ResponseInterface;

    /**
     * @param string $action
     *
     * @return ResponseInterface
     */
    public function get(string $action): ResponseInterface;

    /**
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return ResponseInterface
     */
    public function delete(string $action, ModelInterface $model, string $method): ResponseInterface;

    /**
     * @param string         $action
     * @param ModelInterface $model
     * @param string         $method
     *
     * @return ResponseInterface
     */
    public function put(string $action, ModelInterface $model, string $method): ResponseInterface;

    /**
     * @param $client
     *
     * @return mixed
     */
    public function setHttpClient($client);

    /**
     * @param bool $debug
     *
     * @return mixed
     */
    public function setDebug(bool $debug);
}
