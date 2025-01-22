<?php

declare(strict_types = 1);

namespace Pyz\Client\Antelope;

use \Spryker\Client\Kernel\Container;
use Spryker\Client\Kernel\AbstractDependencyProvider;

class AntelopeDependencyProvider extends AbstractDependencyProvider
{
    public const ZED_REQUEST_CLIENT = 'ZED_REQUEST_CLIENT';

    /**
     * @param \Spryker\Client\Kernel\Container $container
     *
     * @return \Spryker\Client\Kernel\Container
     */
    public function provideServiceLayerDependencies(Container $container)
    {
        $container = parent::provideServiceLayerDependencies($container);
        $container = $this->addZedRequestClient($container);

        return $container;
    }

    public function addZedRequestClient(Container $container): Container
    {
        $container->set($this::ZED_REQUEST_CLIENT, function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        });

        return $container;
    }
}
