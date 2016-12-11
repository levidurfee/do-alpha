<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateDomainRecordInterface.
 */
interface CreateDomainRecordInterface extends ModelInterface
{
    /**
     * CreateDomainRecordInterface constructor.
     *
     * @param string $domain
     * @param string $type
     * @param string $name
     * @param string $data
     */
    public function __construct(string $domain, string $type, string $name, string $data);

    /**
     * @return string
     */
    public function getDomain(): string;
}
