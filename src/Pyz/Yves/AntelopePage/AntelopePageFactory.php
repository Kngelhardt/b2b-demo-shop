<?php

declare(strict_types=1);

namespace Pyz\Yves\AntelopePage;

use Pyz\Client\Antelope\AntelopeClientInterface;
use Spryker\Yves\Kernel\AbstractFactory;

class AntelopePageFactory extends AbstractFactory
{
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency(AntelopePageDependencyProvider::CLIENT_ANTELOPE);
    }
}
