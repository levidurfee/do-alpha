<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateDomainInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDomainInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDomainInterface;

/**
 * Class Domains.
 */
class Domains implements ListInterface, ResourceInterface, RetrieveInterface
{
    /**
     * @var string
     */
    protected $action = 'domains';

    /**
     * To retrieve a list of all of the domains in your account.
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
     */
    public function retrieve(ClientInterface $client, RetrieveDomainInterface $retrieveDomain = null): ResponseInterface
    {
        if ($retrieveDomain == null) {
            throw new \InvalidArgumentException('Delete Domain model required');
        }

        return $client->get($this->action.'/'.$retrieveDomain->getDomainName());
    }
}
