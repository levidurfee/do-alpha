<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

/**
 * Class DomainRecords.
 */
class DomainRecords implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    public function getAll(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement getAll() method.
    }

    public function create(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement create() method.
    }

    /**
     * This method will need to pass a more verbose method to Client->delete since the API URL
     * is /v2/domains/$DOMAIN_NAME/records/$RECORD_ID The DeleteDomainRecordsModel will need to
     * return the domain and the record id.
     *
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function delete(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement delete() method.
    }

    public function retrieve(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement retrieve() method.
    }

    public function update(ClientInterface $client): ResponseInterface
    {
        // TODO: Implement update() method.
    }
}
