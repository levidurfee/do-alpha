<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteBlockStorageInterface.
 */
interface DeleteBlockStorageInterface extends ModelInterface
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
