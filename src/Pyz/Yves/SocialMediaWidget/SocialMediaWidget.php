<?php
declare(strict_types=1);

namespace Pyz\Yves\SocialMediaWidget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

class SocialMediaWidget extends AbstractWidget
{
    protected const PRODUCT_URL_PARAMETER = 'productUrl';


    public function __construct(string $productUrl)
    {
        $this->addParameter(static::PRODUCT_URL_PARAMETER, $productUrl);
    }

    public static function getName(): string
    {
        return 'SocialMediaWidget';
    }

    public static function getTemplate(): string
    {
        return '@SocialMediaWidget/views/social-media-widget/social-media-widget.twig';
    }
}
