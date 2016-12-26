<?php

namespace wappr\DigitalOcean\Domains\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Domains\RetrieveDomainInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveDomainRequest.
 */
class RetrieveDomainRequest extends RequestModel implements ModelInterface, RetrieveDomainInterface
{
    /**
     * @var string
     */
    protected $domain_name;

    /**
     * RetrieveDomainInterface constructor.
     *
     * @param string $domain_name
     */
    public function __construct(string $domain_name)
    {
        $this->domain_name = $domain_name;
    }

    /**
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domain_name;
    }
}
