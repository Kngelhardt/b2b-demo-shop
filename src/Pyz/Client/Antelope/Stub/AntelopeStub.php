<?php

declare(strict_types=1);

namespace Pyz\Client\Antelope\Stub;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopesResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClientInterface;

class AntelopeStub
{
    protected ZedRequestClientInterface $zedRequestClient;

    public function __construct(ZedRequestClientInterface $zedRequestClient) {
        $this->zedRequestClient = $zedRequestClient;
    }

    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopesResponseTransfer {
        /**
         * @var AntelopesResponseTransfer $antelopeTransfer
         */
        $antelopeTransfer = $this->zedRequestClient->call(
            '/training/gateway/get-antelopes',
            $antelopeCriteriaTransfer
        );

        return $antelopeTransfer;
    }

}
