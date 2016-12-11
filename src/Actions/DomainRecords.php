<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\ResourceInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDomainRecordInterface;
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
     * @param ClientInterface                  $client
     * @param DeleteDomainRecordInterface|null $deleteDomainRecord
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteDomainRecordInterface $deleteDomainRecord = null): ResponseInterface
    {
        if ($deleteDomainRecord == null) {
            throw new \InvalidArgumentException('Delete Domain model required');
        }

        // /v2/domains/$DOMAIN_NAME/records/$RECORD_ID
        return $client->delete($this->action, $deleteDomainRecord, 'getSegments');
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
