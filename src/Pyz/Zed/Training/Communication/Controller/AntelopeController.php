<?php

declare(strict_types = 1);

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class AntelopeController extends AbstractController
{
    /**
     * @return array<string, mixed>
     */
    public function addAction(Request $request): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $name = $request->get('name') ?: 'Oskar';
        $antelopeTransfer->setName($name);

        $antelopeResponseTransfer = $this->getFacade()
            ->getAntelope((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function createAction(Request $request): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $name = $request->get('name') ?: 'Oskar';
        $antelopeTransfer->setName($name);

        $antelopeResponseTransfer = $this->getFacade()
            ->getAntelope((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
