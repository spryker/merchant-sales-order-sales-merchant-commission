<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Writer;

use Generated\Shared\Transfer\MerchantOrderTransfer;
use Generated\Shared\Transfer\OrderTransfer;

interface MerchantOrderWriterInterface
{
    public function saveMerchantCommissionToMerchantOrderTotals(MerchantOrderTransfer $merchantOrderTransfer): void;

    /**
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     * @param list<\Generated\Shared\Transfer\ItemTransfer> $itemTransfers
     *
     * @return void
     */
    public function updateMerchantCommissionToMerchantOrderTotals(OrderTransfer $orderTransfer, array $itemTransfers): void;
}
