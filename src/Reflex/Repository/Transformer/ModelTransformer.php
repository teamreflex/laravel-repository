<?php namespace Reflex\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use Reflex\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package Reflex\Repository\Transformer
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
