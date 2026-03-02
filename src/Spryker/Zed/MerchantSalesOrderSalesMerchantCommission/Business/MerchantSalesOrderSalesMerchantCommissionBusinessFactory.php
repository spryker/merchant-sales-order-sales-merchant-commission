<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Reader\MerchantOrderReader;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Reader\MerchantOrderReaderInterface;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Writer\MerchantOrderWriter;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Business\Writer\MerchantOrderWriterInterface;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\Dependency\Facade\MerchantSalesOrderSalesMerchantCommissionToMerchantSalesOrderFacadeInterface;
use Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\MerchantSalesOrderSalesMerchantCommissionDependencyProvider;

/**
 * @method \Spryker\Zed\MerchantSalesOrderSalesMerchantCommission\MerchantSalesOrderSalesMerchantCommissionConfig getConfig()
 */
class MerchantSalesOrderSalesMerchantCommissionBusinessFactory extends AbstractBusinessFactory
{
    public function createMerchantOrderWriter(): MerchantOrderWriterInterface
    {
        return new MerchantOrderWriter(
            $this->getMerchantSalesOrderFacade(),
            $this->createMerchantOrderReader(),
        );
    }

    public function createMerchantOrderReader(): MerchantOrderReaderInterface
    {
        return new MerchantOrderReader(
            $this->getMerchantSalesOrderFacade(),
        );
    }

    public function getMerchantSalesOrderFacade(): MerchantSalesOrderSalesMerchantCommissionToMerchantSalesOrderFacadeInterface
    {
        return $this->getProvidedDependency(MerchantSalesOrderSalesMerchantCommissionDependencyProvider::FACADE_MERCHANT_SALES_ORDER);
    }
}
