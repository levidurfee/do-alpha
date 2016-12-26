<?php

namespace wappr\DigitalOcean\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\DomainRecords\UpdateDomainRecordInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class UpdateDomainRecordRequest.
 */
class UpdateDomainRecordRequest extends RequestModel implements ModelInterface, UpdateDomainRecordInterface
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
     * @var int
     */
    protected $record_id;

    /**
     * UpdateDomainRecordRequest constructor.
     *
     * @param string $domain
     * @param int    $record_id
     * @param string $type
     */
    public function __construct(string $domain, int $record_id, string $type)
    {
        $this->type = $type;
        $this->domain = $domain;
        $this->record_id = $record_id;
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

    /**
     * @return int
     */
    public function getRecordId(): int
    {
        return $this->record_id;
    }
}
