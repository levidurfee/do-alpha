<?php

namespace wappr\DigitalOcean\Tags;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\Requests\ListInterface;
use wappr\DigitalOcean\Contracts\Requests\ResourceInterface;
use wappr\DigitalOcean\Contracts\Requests\RetrieveInterface;
use wappr\DigitalOcean\Contracts\Requests\UpdateInterface;
use wappr\DigitalOcean\Contracts\Client\ClientInterface;
use wappr\DigitalOcean\Contracts\Tags\CreateTagInterface;
use wappr\DigitalOcean\Contracts\Tags\DeleteTagInterface;
use wappr\DigitalOcean\Contracts\Tags\RetrieveTagInterface;
use wappr\DigitalOcean\Contracts\Tags\UpdateTagInterface;

/**
 * Class Tags.
 */
class Tags implements ListInterface, ResourceInterface, RetrieveInterface, UpdateInterface
{
    /**
     * @var string
     */
    protected $action = 'tags';

    /**
     * @param ClientInterface $client
     *
     * @return ResponseInterface
     */
    public function getAll(ClientInterface $client): ResponseInterface
    {
        return $client->get($this->action);
    }

    /**
     * @param ClientInterface         $client
     * @param CreateTagInterface|null $createTag
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create(ClientInterface $client, CreateTagInterface $createTag = null): ResponseInterface
    {
        if ($createTag == null) {
            throw new \InvalidArgumentException('Create Tag model required.');
        }

        return $client->post($this->action, $createTag);
    }

    /**
     * @param ClientInterface         $client
     * @param DeleteTagInterface|null $deleteTag
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function delete(ClientInterface $client, DeleteTagInterface $deleteTag = null): ResponseInterface
    {
        if ($deleteTag == null) {
            throw new \InvalidArgumentException('Delete Tag model required.');
        }

        return $client->delete($this->action, $deleteTag, 'getTagName');
    }

    /**
     * @param ClientInterface           $client
     * @param RetrieveTagInterface|null $retrieveTag
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function retrieve(ClientInterface $client, RetrieveTagInterface $retrieveTag = null): ResponseInterface
    {
        if ($retrieveTag == null) {
            throw new \InvalidArgumentException('Retrieve Tag model required.');
        }

        return $client->get($this->action.'/'.$retrieveTag->getTagName());
    }

    /**
     * @param ClientInterface         $client
     * @param UpdateTagInterface|null $updateTag
     *
     * @return ResponseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function update(ClientInterface $client, UpdateTagInterface $updateTag = null): ResponseInterface
    {
        if ($updateTag == null) {
            throw new \InvalidArgumentException('Update Tag model required.');
        }

        return $client->put($this->action.'/'.$updateTag->getTagName(), $updateTag, 'return');
    }

    // Currently you can only tag/un-tag droplets.

    public function tagResource(ClientInterface $client): ResponseInterface
    {
        // TODO: Write code here.
    }

    public function unTagResource(ClientInterface $client): ResponseInterface
    {
        // TODO: Write code here.
    }
}
