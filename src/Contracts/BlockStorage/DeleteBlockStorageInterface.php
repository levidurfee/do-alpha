<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteBlockStorageInterface.
 */
interface DeleteBlockStorageInterface extends ModelInterface
{
    /**
     * DeleteBlockStorageInterface constructor.
     *
     * @param $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
