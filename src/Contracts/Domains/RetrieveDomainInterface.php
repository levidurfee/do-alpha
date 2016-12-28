<?php

namespace wappr\DigitalOcean\Contracts\Domains;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveDomainInterface.
 */
interface RetrieveDomainInterface extends ModelInterface
{
    /**
     * RetrieveDomainInterface constructor.
     *
     * @param string $domain_name
     */
    public function __construct(string $domain_name);

    /**
     * @return string
     */
    public function getDomainName(): string;
}
