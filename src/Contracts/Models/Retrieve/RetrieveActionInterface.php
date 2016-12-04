<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveActionInterface.
 */
interface RetrieveActionInterface extends ModelInterface
{
    /**
     * RetrieveActionInterface constructor.
     *
     * @param $action_id int Required
     */
    public function __construct($action_id);

    /**
     * @return int
     */
    public function getActionId(): int;
}
