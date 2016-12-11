<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateDomainRecordInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class CreateDomainRecordRequest extends ModelMethods implements ModelInterface, CreateDomainRecordInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $data;

    /**
     * @var int
     */
    protected $priority;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var int
     */
    protected $weight;

    /**
     * @var string
     */
    protected $domain;

    /**
     * CreateDomainRecordRequest constructor.
     *
     * @param string $domain
     * @param string $type
     * @param string $name
     * @param string $data
     */
    public function __construct(string $domain, string $type, string $name, string $data)
    {
        $this->type = $type;
        $this->domain = $domain;
        $this->name = $name;
        $this->data = $data;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->port = $port;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }
}
