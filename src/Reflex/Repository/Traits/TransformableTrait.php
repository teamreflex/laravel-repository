<?php namespace Reflex\Repository\Traits;

/**
 * Class TransformableTrait
 * @package Reflex\Repository\Traits
 */
trait TransformableTrait
{

    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
