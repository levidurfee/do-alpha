<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDomainRecordsInterface;
use wappr\DigitalOcean\Contracts\Models\Update\UpdateDomainRecordInterface;
use wappr\DigitalOcean\Models\Create\CreateDomainRecordRequest;

/**
 * Class DomainRecords.
 */
class DomainRecords implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    protected $action = 'domains';

    public function getAll(ClientInterface $client, RetrieveDomainRecordsInterface $domainRecords = null): ResponseInterface
    {
        if ($domainRecords == null) {
            throw new \InvalidArgumentException('Retrieve Domain Records model required.');
        }

        return $client->get($this->action.'/'.$domainRecords->getDomain().'/records');
    }

    public function create(ClientInterface $client, CreateDomainRecordRequest $createDomainRecordRequest = null): ResponseInterface
    {
        if ($createDomainRecordRequest == null) {
            throw new \InvalidArgumentException('Create Domain Record model required.');
        }

        return $client->post($this->action.'/'.$createDomainRecordRequest->getDomain().'/records', $createDomainRecordRequest);
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

    public function update(ClientInterface $client, UpdateDomainRecordInterface $domainRecord = null): ResponseInterface
    {
        if ($domainRecord == null) {
            throw new \InvalidArgumentException('Update Domain Record model required.');
        }

        return $client->put(
            $this->action.'/'.$domainRecord->getDomain().'/records/'.$domainRecord->getRecordId(),
            $domainRecord,
            'return'
        );
    }
}
