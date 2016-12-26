<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Domains\CreateDomainInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class CreateDomainRequest.
 */
class CreateDomainRequest extends RequestModel implements ModelInterface, CreateDomainInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $ip_address;

    /**
     * CreateDomainRequest constructor.
     *
     * @param string $name
     * @param string $ip_address
     */
    public function __construct(string $name, string $ip_address)
    {
        $this->name = $name;
        $this->ip_address = $ip_address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ip_address;
    }
}
