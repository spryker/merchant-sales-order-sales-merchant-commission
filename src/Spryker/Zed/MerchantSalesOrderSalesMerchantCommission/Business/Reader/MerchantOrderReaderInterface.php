<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Reader;

use Generated\Shared\Transfer\MerchantOrderTransfer;

interface MerchantOrderReaderInterface
{
    public function findMerchantOrderByIdSalesOrderAndMerchantReference(int $idSalesOrder, string $merchantReference): ?MerchantOrderTransfer;

    public function findMerchantOrderByIdMerchantOrder(int $idMerchantOrder): ?MerchantOrderTransfer;
}
