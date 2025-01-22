<?php

declare(strict_types = 1);

namespace Pyz\Client\Antelope;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopesResponseTransfer;

interface AntelopeClientInterface
{
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopesResponseTransfer;
}
