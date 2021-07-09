<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PaymentGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;

/**
 * Provides ability to add criterias to the payment gui table query
 *
 * Use this plugin if you want to filter data in the payment table (ZED GUI)
 */
interface PaymentMethodTableQueryExpanderPluginInterface
{
    /**
     * @api
     *
     * @return \Generated\Shared\Transfer\QueryCriteriaTransfer
     */
    public function buildQueryCriteria(): QueryCriteriaTransfer;
}
