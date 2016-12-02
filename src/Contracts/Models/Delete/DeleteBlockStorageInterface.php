<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

interface DeleteBlockStorageInterface
{
    public function __construct($drive_id);

    /**
     * @return int
     */
    public function getDriveId(): int;
}
