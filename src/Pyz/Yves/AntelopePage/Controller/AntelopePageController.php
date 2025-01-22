<?php

declare(strict_types=1);

namespace Pyz\Yves\AntelopePage\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @method \Pyz\Yves\AntelopePage\AntelopePageFactory getFactory()
 */
class AntelopePageController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $antelopesResponseTransfer = $this->getFactory()
            ->getAntelopeClient()
            ->getAntelopes(new AntelopeCriteriaTransfer());

        return $this->view(
            ['antelopes' => $antelopesResponseTransfer->getAntelopes(),],
            [],
            '@AntelopePage/templates/index.twig',
        );
    }
}
