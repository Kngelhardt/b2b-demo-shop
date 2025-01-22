<?php

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopesResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\Antelope\AntelopeFactory getFactory()
 */
class AntelopeClient extends AbstractClient implements AntelopeClientInterface
{
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopesResponseTransfer
    {
        return $this->getFactory()
            ->createAntelopeStub()
            ->getAntelopes($antelopeCriteriaTransfer);
    }
}
