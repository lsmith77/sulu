<?php
/*
 * This file is part of the Sulu CMS.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Rest\Exception;

/**
 * This exception should be thrown when an Entity id already has been set
 * @package Sulu\Bundle\CoreBundle\Controller\Exception
 */
class EntityIdAlreadySetException extends RestException
{
    /**
     * The type of the entity, which was not found
     * @var string
     */
    protected $entity;

    /**
     * The id of the entity, which was not found
     * @var int
     */
    protected $id;

    /**
     * @param string $entity The type of the entity, which was not found
     * @param int $id The id of the entity, which was not found
     */
    public function __construct($entity, $id)
    {
        $this->entity = $entity;
        $this->id = $id;
        $message = 'The id-field of the  "' . $entity . '"-Entity already has an id with the value "' . $id . '" .';
        parent::__construct($message, 0);
    }
}
