<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

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
