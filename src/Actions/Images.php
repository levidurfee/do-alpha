<?php

namespace wappr\DigitalOcean\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Actions\ListInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Actions\UpdateInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteImageInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveImageInterface;
use wappr\DigitalOcean\Contracts\Models\Update\UpdateImageInterface;

/**
 * Class Images.
 */
class Images implements ListInterface, RetrieveInterface, UpdateInterface
{
    protected $action = 'images';

    /**
     * List all the images.
     *
     * @since 0.1.1
     *
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface             $client
     * @param RetrieveImageInterface|null $image
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveImageInterface $image = null): ResponseInterface
    {
        if ($image == null) {
            throw new \InvalidArgumentException('Retrieve image model required.');
        }

        return $client->get($this->action.'/'.$image->getImageId());
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface           $client
     * @param UpdateImageInterface|null $image
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function update(ClientInterface $client, UpdateImageInterface $image = null): ResponseInterface
    {
        if ($image == null) {
            throw new \InvalidArgumentException('Update image model required.');
        }

        return $client->put($this->action, $image, 'getImageId');
    }

    /**
     * @since 0.1.1
     *
     * @param ClientInterface           $client
     * @param DeleteImageInterface|null $image
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteImageInterface $image = null): ResponseInterface
    {
        if ($image == null) {
            throw new \InvalidArgumentException('Delete image model required.');
        }

        return $client->delete($this->action, $image, 'getImageId');
    }
}
