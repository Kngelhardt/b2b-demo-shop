<?php

declare(strict_types = 1);

namespace Pyz\Zed\TrainingGui\Communication;

use Generated\Shared\Transfer\AntelopeTransfer;
use Orm\Zed\Antelope\Persistence\PyzAntelopeQuery;
use Pyz\Zed\Training\Business\TrainingFacadeInterface;
use Pyz\Zed\TrainingGui\Communication\Form\AntelopeCreateForm;
use Pyz\Zed\TrainingGui\TrainingGuiDependencyProvider;
use Pyz\Zed\TrainingGui\Communication\Table\AntelopeTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

class TrainingGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createAntelopeTable()
    {
        return new AntelopeTable(
            $this->getAntelopePropelQuery()
        );
    }

    public function createAntelopeCreateForm(AntelopeTransfer $antelopeTransfer, array $options = [])
    {
        return $this->getFormFactory()->create(AntelopeCreateForm::class, $antelopeTransfer, $options);
    }

    public function getAntelopeFacade(): TrainingFacadeInterface
    {
        return $this->getProvidedDependency(TrainingGuiDependencyProvider::FACADE_TRAINING);
    }

    public function getAntelopePropelQuery(): PyzAntelopeQuery
    {
        return $this->getProvidedDependency(TrainingGuiDependencyProvider::PROPEL_QUERY_ANTELOPE);
    }
}
