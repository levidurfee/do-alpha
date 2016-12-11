<?php

namespace wappr\DigitalOcean\Contracts\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface UpdateDomainRecordInterface.
 */
interface UpdateDomainRecordInterface extends ModelInterface
{
    /**
     * UpdateDomainRecordInterface constructor.
     *
     * @param string $domain
     * @param int    $record_id
     * @param string $type
     */
    public function __construct(string $domain, int $record_id, string $type);

    /**
     * @return string
     */
    public function getDomain(): string;

    /**
     * @return int
     */
    public function getRecordId(): int;
}
