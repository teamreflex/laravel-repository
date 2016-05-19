<?php
namespace Reflex\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package Reflex\Repository\Events
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
