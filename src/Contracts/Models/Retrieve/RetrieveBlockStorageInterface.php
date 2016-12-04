<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

/**
 * Interface RetrieveBlockStorageInterface.
 */
interface RetrieveBlockStorageInterface
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
