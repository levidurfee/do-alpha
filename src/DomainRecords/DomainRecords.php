<?php

namespace wappr\DigitalOcean\DomainRecords;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Requests\ResourceInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Requests\UpdateInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\DomainRecords\DeleteDomainRecordInterface;
use wappr\DigitalOcean\Contracts\DomainRecords\RetrieveDomainRecordsInterface;
use wappr\DigitalOcean\Contracts\DomainRecords\UpdateDomainRecordInterface;
use wappr\DigitalOcean\DomainRecords\Requests\CreateDomainRecordsRequest;

/**
 * Class DomainRecords.
 */
class DomainRecords implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    /**
     * @var string action
     */
    protected $action = 'domains';

    /**
     * @param ClientInterface                     $client
     * @param RetrieveDomainRecordsInterface|null $domainRecords
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getAll(ClientInterface $client, RetrieveDomainRecordsInterface $domainRecords = null): ResponseInterface
    {
        if ($domainRecords == null) {
            throw new \InvalidArgumentException('Retrieve Domain Records model required.');
        }

        return $client->get($this->action.'/'.$domainRecords->getDomain().'/records');
    }

    /**
     * @param ClientInterface                 $client
     * @param CreateDomainRecordsRequest|null $createDomainRecordsRequest
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateDomainRecordsRequest $createDomainRecordsRequest = null): ResponseInterface
    {
        if ($createDomainRecordsRequest == null) {
            throw new \InvalidArgumentException('Create Domain Record model required.');
        }

        return $client->post($this->action.'/'.$createDomainRecordsRequest->getDomain().'/records', $createDomainRecordsRequest);
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

    /**
     * @param ClientInterface                  $client
     * @param UpdateDomainRecordInterface|null $domainRecord
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
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
