<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteDomainInterface.
 */
interface DeleteDomainInterface extends ModelInterface
{
    /**
     * DeleteDomainInterface constructor.
     *
     * @param string $domain_name
     */
    public function __construct(string $domain_name);

    /**
     * @return string
     */
    public function getDomainName(): string;
}
