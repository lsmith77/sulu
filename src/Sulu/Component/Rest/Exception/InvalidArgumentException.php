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
 * This exception should be thrown when an argument is invalid!
 * @package Sulu\Bundle\CoreBundle\Controller\Exception
 */
class InvalidArgumentException extends RestException
{
    /**
     * The type of the entity, which was not found
     * @var string
     */
    protected $entity;

    /**
     * The argument of the entity, which was not passed
     * @var string
     */
    protected $argument;

    /**
     * @param string $entity The type of the entity
     * @param string $argument The argument of the entity, which was invalid
     */
    public function __construct($entity, $argument, $customMessage = null)
    {
        $this->entity = $entity;
        $this->argument = $argument;
        $message = 'The "' . $entity . '"-entity requires a valid "' . $argument . '"-argument';
        if ($customMessage != null) {
            $message .= $customMessage;
        }
        parent::__construct($message, 0);
    }
}
