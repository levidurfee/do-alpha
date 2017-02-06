<?php
/**
 * Created by PhpStorm.
 * User: Levi
 * Date: 2/6/2017
 * Time: 2:53 PM
 */
namespace wappr\digitalocean\Contracts\BlockStorage;


/**
 * Class ListSnapshotsBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
interface ListSnapshotsBlockStorageContract
{
    /**
     * ListSnapshotsBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
