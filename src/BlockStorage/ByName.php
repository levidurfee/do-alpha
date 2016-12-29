<?php

namespace wappr\DigitalOcean\BlockStorage;

trait ByName
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $region;

    /**
     * RetrieveByNameInterface constructor.
     *
     * @param string $name
     * @param string $region
     */
    public function __construct(string $name, string $region)
    {
        $this->name = $name;
        $this->region = $region;
    }

    /**
     * @return array
     */
    public function getQuery(): array
    {
        return ['name' => $this->name, 'region' => $this->region];
    }
}
