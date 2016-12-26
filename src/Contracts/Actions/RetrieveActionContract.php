<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveActionContract.
 */
interface RetrieveActionContract extends ModelInterface
{
    /**
     * RetrieveActionContract constructor.
     *
     * @param $action_id int Required
     */
    public function __construct($action_id);

    /**
     * @return int
     */
    public function getActionId(): int;
}
