<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListSnapshotsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListSnapshots.
 */
class ListSnapshots extends RequestContract implements ListSnapshotsContract
{
    use DropletId;
}
