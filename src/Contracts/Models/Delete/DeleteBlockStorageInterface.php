<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

/**
 * Interface DeleteBlockStorageInterface.
 */
interface DeleteBlockStorageInterface
{
    /**
     * DeleteBlockStorageInterface constructor.
     *
     * @param $drive_id
     */
    public function __construct(string $drive_id);

    /**
     * @return string
     */
    public function getDriveId(): string;
}
