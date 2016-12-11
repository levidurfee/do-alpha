<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

/**
 * Interface ListDomainRecordsInterface.
 */
interface ListDomainRecordsInterface
{
    /**
     * @return string
     */
    public function getDomain(): string;
}
