<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteDomainRecordInterface.
 */
interface DeleteDomainRecordInterface extends ModelInterface
{
    /**
     * DeleteDomainRecordInterface constructor.
     *
     * @param string $domainName
     * @param int    $recordId
     */
    public function __construct(string $domainName, int $recordId);

    /**
     * @return mixed
     */
    public function getRecordId();
}
