<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteTagInterface.
 */
interface DeleteTagInterface extends ModelInterface
{
    /**
     * DeleteTagInterface constructor.
     *
     * @param string $tag_name
     */
    public function __construct(string $tag_name);

    /**
     * @return string
     */
    public function getTagName(): string;
}
