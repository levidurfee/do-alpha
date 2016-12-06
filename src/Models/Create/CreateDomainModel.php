<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateDomainInterface;
use wappr\DigitalOcean\Models\ModelMethods;

/**
 * Class CreateDomainModel.
 */
class CreateDomainModel extends ModelMethods implements ModelInterface, CreateDomainInterface
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
     * CreateDomainModel constructor.
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