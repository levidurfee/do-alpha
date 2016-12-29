<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveContract.
 */
interface RetrieveInterface extends ModelInterface
{
    /**
     * RetrieveContract constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
