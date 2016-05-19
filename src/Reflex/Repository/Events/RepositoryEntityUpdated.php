<?php
namespace Reflex\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package Reflex\Repository\Events
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";
}
