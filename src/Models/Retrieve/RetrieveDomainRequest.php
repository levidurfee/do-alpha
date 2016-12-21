<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveDomainInterface;
use wappr\DigitalOcean\Models\ModelMethods;

/**
 * Class RetrieveDomainRequest.
 */
class RetrieveDomainRequest extends ModelMethods implements ModelInterface, RetrieveDomainInterface
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
