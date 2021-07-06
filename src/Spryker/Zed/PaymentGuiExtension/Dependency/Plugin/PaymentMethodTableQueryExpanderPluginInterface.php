<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PaymentGuiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;

interface PaymentMethodTableQueryExpanderPluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered during query creation and allows to add custom criterias.
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\QueryCriteriaTransfer
     */
    public function buildQueryCriteria(): QueryCriteriaTransfer;
}
