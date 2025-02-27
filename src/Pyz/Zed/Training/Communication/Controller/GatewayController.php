<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopesResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Training\Business\TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function getAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer {
        return $this->getFacade()->getAntelope($antelopeCriteria);
    }

    /**
     * @param AntelopeCriteriaTransfer $antelopeCriteria
     * @return AntelopesResponseTransfer
     */
    public function getAntelopesAction(AntelopeCriteriaTransfer $antelopeCriteria): AntelopesResponseTransfer {
        return $this->getFacade()->getAntelopes($antelopeCriteria);
    }
}
