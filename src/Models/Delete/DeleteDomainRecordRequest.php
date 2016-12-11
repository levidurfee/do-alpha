<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDomainRecordInterface;
use wappr\DigitalOcean\Models\ModelMethods;

/**
 * Class DeleteDomainRecordRequest.
 */
class DeleteDomainRecordRequest extends ModelMethods implements ModelInterface, DeleteDomainRecordInterface
{
    /**
     * @var int
     */
    protected $recordId;

    /**
     * @var string
     */
    protected $domainName;

    /**
     * DeleteDomainRecordRequest constructor.
     *
     * @param string $domainName
     * @param int    $recordId
     */
    public function __construct(string $domainName, int $recordId)
    {
        $this->domainName = $domainName;
        $this->recordId = $recordId;
    }

    /**
     * @return int
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @return string
     */
    public function getSegments()
    {
        return $this->domainName.'/records/'.$this->recordId;
    }
}
