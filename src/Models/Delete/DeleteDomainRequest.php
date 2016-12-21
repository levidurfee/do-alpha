<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDomainInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class DeleteDomainRequest.
 */
class DeleteDomainRequest extends RequestModel implements ModelInterface, DeleteDomainInterface
{
    /**
     * @var string
     */
    protected $domain_name;

    /**
     * DeleteDomainInterface constructor.
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
