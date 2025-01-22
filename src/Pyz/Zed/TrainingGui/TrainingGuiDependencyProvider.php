<?php

declare(strict_types = 1);

namespace Pyz\Zed\TrainingGui;

use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class TrainingGuiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_TRAINING = 'FACADE_TRAINING';
    public const PROPEL_QUERY_ANTELOPE = 'PROPEL_QUERY_ANTELOPE';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = parent::provideCommunicationLayerDependencies($container);

        $container = $this->addAntelopePropelQuery($container);
        $container = $this->addTrainingFacade($container);

        return $container;
    }

    protected function addAntelopePropelQuery(Container $container): Container
    {
        $container->set(static::PROPEL_QUERY_ANTELOPE, $container->factory(function () {
            return PyzAntelopeQuery::create();
        }));

        return $container;
    }

    protected function addTrainingFacade(Container $container): Container
    {
        $container->set(static::FACADE_TRAINING, function (Container $container) {
            return $container->getLocator()->training()->facade();
        });

        return $container;
    }
}
