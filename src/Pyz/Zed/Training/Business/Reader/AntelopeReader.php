<?php

declare(strict_types=1);

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Generated\Shared\Transfer\AntelopesResponseTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeReader
{
    /**
     * @var \Pyz\Zed\Training\Persistence\TrainingRepositoryInterface
     */
    protected TrainingRepositoryInterface $antelopeRepository;

    public function __construct(TrainingRepositoryInterface $trainingRepository)
    {
        $this->antelopeRepository = $trainingRepository;
    }


    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeResponseTransfer
     */
    public function getAntelope(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->antelopeRepository->getAntelope($antelopeCriteriaTransfer);

        $antelopeResponseTransfer = new AntelopeResponseTransfer();

        if (!$antelopeTransfer) {
            $antelopeResponseTransfer->setIsSuccessful(false);

            return $antelopeResponseTransfer;
        }

        $antelopeResponseTransfer
            ->setIsSuccessful(true)
            ->setAntelope($antelopeTransfer);

        return $antelopeResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopesResponseTransfer
     */
    public function getAntelopes(AntelopeCriteriaTransfer $antelopeCriteriaTransfer): AntelopesResponseTransfer
    {
        $antelopeEntities = $this->antelopeRepository->getAntelopes($antelopeCriteriaTransfer);

        $antelopeResponseTransfer = new AntelopesResponseTransfer();

        if (!$antelopeEntities) {
            $antelopeResponseTransfer->setIsSuccessful(false);

            return $antelopeResponseTransfer;
        }

        $antelopeResponseTransfer
            ->setIsSuccessful(true)
            ->setAntelopes(new \ArrayObject($antelopeEntities));

        return $antelopeResponseTransfer;
    }
}
