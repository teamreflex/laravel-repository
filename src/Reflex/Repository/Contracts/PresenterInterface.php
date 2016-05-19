<?php
namespace Reflex\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package Reflex\Repository\Contracts
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
