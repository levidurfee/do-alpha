<?php

namespace wappr\DigitalOcean\Contracts\DomainRecords;

/**
 * Interface RetrieveDomainRecordsInterface.
 */
interface RetrieveDomainRecordsInterface
{
    /**
     * @return string
     */
    public function getDomain(): string;
}
