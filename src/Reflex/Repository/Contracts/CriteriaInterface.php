<?php
namespace Reflex\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package Reflex\Repository\Contracts
 */
interface CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository);
}
