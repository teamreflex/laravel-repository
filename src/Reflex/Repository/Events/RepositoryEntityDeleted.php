<?php
namespace Reflex\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package Reflex\Repository\Events
 */
class RepositoryEntityDeleted extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleted";
}
