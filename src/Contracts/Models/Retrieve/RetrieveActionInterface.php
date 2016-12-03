<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

interface RetrieveActionInterface
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
