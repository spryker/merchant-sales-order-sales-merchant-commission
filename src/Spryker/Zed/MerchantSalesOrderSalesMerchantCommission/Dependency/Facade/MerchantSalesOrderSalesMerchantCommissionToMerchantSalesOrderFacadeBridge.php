<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Dependency\Facade;

use Generated\Shared\Transfer\MerchantOrderCollectionTransfer;
use Generated\Shared\Transfer\MerchantOrderCriteriaTransfer;
use Generated\Shared\Transfer\OrderTransfer;

class MerchantSalesOrderSalesMerchantCommissionToMerchantSalesOrderFacadeBridge implements MerchantSalesOrderSalesMerchantCommissionToMerchantSalesOrderFacadeInterface
{
    /**
     * @var \Spryker\Zed\MerchantSalesOrder\Business\MerchantSalesOrderFacadeInterface
     */
    protected $merchantSalesOrderFacade;

    /**
     * @param \Spryker\Zed\MerchantSalesOrder\Business\MerchantSalesOrderFacadeInterface $merchantSalesOrderFacade
     */
    public function __construct($merchantSalesOrderFacade)
    {
        $this->merchantSalesOrderFacade = $merchantSalesOrderFacade;
    }

    public function updateMerchantOrderTotals(OrderTransfer $orderTransfer): OrderTransfer
    {
        return $this->merchantSalesOrderFacade->updateMerchantOrderTotals($orderTransfer);
    }

    public function getMerchantOrderCollection(
        MerchantOrderCriteriaTransfer $merchantOrderCriteriaTransfer
    ): MerchantOrderCollectionTransfer {
        return $this->merchantSalesOrderFacade->getMerchantOrderCollection($merchantOrderCriteriaTransfer);
    }
}
