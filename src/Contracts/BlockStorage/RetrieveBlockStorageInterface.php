<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveBlockStorageInterface.
 */
interface RetrieveBlockStorageInterface extends ModelInterface
{
    /**
     * RetrieveBlockStorageInterface constructor.
     *
     * @param string $id
     */
    public function __construct(string $id);

    /**
     * @return string
     */
    public function getId(): string;
}
