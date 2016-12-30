<?php

namespace wappr\DigitalOcean\Account;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;

/**
 * Class AccountManager.
 */
class AccountManager implements RetrieveContract
{
    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function retrieve(ClientInterface $client): ResponseInterface
    {
        return $client->get('account');
    }
}