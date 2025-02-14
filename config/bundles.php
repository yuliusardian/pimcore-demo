<?php

use CustomerManagementFrameworkBundle\PimcoreCustomerManagementFrameworkBundle;
use OutputDataConfigToolkitBundle\OutputDataConfigToolkitBundle;
use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcoreEcommerceFrameworkBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcorePaymentProviderPayPalSmartPaymentButtonBundle;
use Pimcore\Bundle\GlossaryBundle\PimcoreGlossaryBundle;
use Pimcore\Bundle\GoogleMarketingBundle\PimcoreGoogleMarketingBundle;
use Pimcore\Bundle\ObjectMergerBundle\ObjectMergerBundle;
use Pimcore\Bundle\SeoBundle\PimcoreSeoBundle;
use Pimcore\Bundle\WebToPrintBundle\PimcoreWebToPrintBundle;
use Web2PrintToolsBundle\Web2PrintToolsBundle;
use Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle;
use Pimcore\Bundle\CustomReportsBundle\PimcoreCustomReportsBundle;
use Pimcore\Bundle\ApplicationLoggerBundle\PimcoreApplicationLoggerBundle;
use Pimcore\Bundle\PersonalizationBundle\PimcorePersonalizationBundle;

return [
    //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    PimcorePersonalizationBundle::class => ['all' => true],
    PimcoreCustomerManagementFrameworkBundle::class => ['all' => true],
    PimcoreGlossaryBundle::class => ['all' => true],
    PimcoreSeoBundle::class => ['all' => true],
    PimcoreSimpleBackendSearchBundle::class => ['all' => true],
    PimcorePaymentProviderPayPalSmartPaymentButtonBundle::class => ['all' => true],
    PimcoreDataHubBundle::class => ['all' => true],
    OutputDataConfigToolkitBundle::class => ['all' => true],
    Web2PrintToolsBundle::class => ['all' => true],
    ObjectMergerBundle::class => ['all' => true],
    PimcoreCustomReportsBundle::class => ['all' => true],
    PimcoreGoogleMarketingBundle::class => ['all' => true],
    PimcoreApplicationLoggerBundle::class => ['all' => true],
    PimcoreWebToPrintBundle::class => ['all' => true],
    PimcoreEcommerceFrameworkBundle::class => ['all' => true],
];
