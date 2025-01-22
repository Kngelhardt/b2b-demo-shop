<?php

declare(strict_types = 1);

namespace Pyz\Yves\AntelopePage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class AntelopePageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    /**
     * @var string
     */
    public const ROUTE_NAME = 'AntelopePage';

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addIndexRoute($routeCollection);

        return $routeCollection;
    }


    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/antelope-page', 'AntelopePage', 'AntelopePage', 'indexAction');
        $routeCollection->add(static::ROUTE_NAME, $route);

        return $routeCollection;
    }
}
