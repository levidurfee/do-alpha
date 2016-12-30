<?php

namespace wappr\DigitalOcean\Domains;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListContract;
use wappr\DigitalOcean\Contracts\Requests\ResourceContract;
use wappr\DigitalOcean\Contracts\Requests\RetrieveContract;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\Domains\CreateDomainInterface;
use wappr\DigitalOcean\Contracts\Domains\DeleteDomainInterface;
use wappr\DigitalOcean\Contracts\Domains\RetrieveDomainInterface;

/**
 * Class DomainsManager.
 */
class DomainsManager implements ListContract, ResourceContract, RetrieveContract
{
    /**
     * @var string
     */
    protected $action = 'domains';

    /**
     * @since 0.1.1
     *
     * To retrieve a list of all of the domains in your account
     *
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @param ClientInterface            $client
     * @param CreateDomainInterface|null $createDomain
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateDomainInterface $createDomain = null): ResponseInterface
    {
        if ($createDomain == null) {
            throw new \InvalidArgumentException('Create Domain model required.');
        }

        return $client->post($this->action, $createDomain);
    }

    /**
     * @param ClientInterface            $client
     * @param DeleteDomainInterface|null $deleteDomain
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteDomainInterface $deleteDomain = null): ResponseInterface
    {
        if ($deleteDomain == null) {
            throw new \InvalidArgumentException('Delete Domain model required');
        }

        return $client->delete($this->action, $deleteDomain, 'getDomainName');
    }

    /**
     * @param ClientInterface              $client
     * @param RetrieveDomainInterface|null $retrieveDomain
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveDomainInterface $retrieveDomain = null): ResponseInterface
    {
        if ($retrieveDomain == null) {
            throw new \InvalidArgumentException('Delete Domain model required');
        }

        return $client->get($this->action.'/'.$retrieveDomain->getDomainName());
    }
}
