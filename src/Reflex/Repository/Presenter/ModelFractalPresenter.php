<?php
namespace Reflex\Repository\Presenter;

use Exception;
use Reflex\Repository\Transformer\ModelTransformer;

/**
 * Class ModelFractalPresenter
 * @package Reflex\Repository\Presenter
 */
class ModelFractalPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return ModelTransformer
     * @throws Exception
     */
    public function getTransformer()
    {
        if (!class_exists('League\Fractal\Manager')) {
            throw new Exception("Package required. Please install: 'composer require league/fractal' (0.12.*)");
        }

        return new ModelTransformer();
    }
}
