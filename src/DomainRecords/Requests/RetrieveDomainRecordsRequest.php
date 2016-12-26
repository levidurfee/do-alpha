<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\DomainRecords\RetrieveDomainRecordsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveDomainRecordsRequest.
 */
class RetrieveDomainRecordsRequest extends RequestModel implements ModelInterface, RetrieveDomainRecordsInterface
{
    /**
     * @var string
     */
    protected $domain;

    /**
     * RetrieveDomainRecordsRequest constructor.
     *
     * @param string $domain
     */
    public function __construct(string $domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }
}
