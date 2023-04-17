<?php
namespace Lobbster\Simple\Block;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;

class Simple extends ListProduct
{
  public function __construct(Context $context, PostHelper $postDataHelper, Resolver $layerResolver, CategoryRepositoryInterface $categoryRepository, Data $urlHelper, array $data = [])
  {
      parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $data);
  }

    public function printData()
   {
       if($this->getProduct()){
           return $this->getProduct()->getData('sku');
       }
       else {
           return 'No product page';
       }

   }
}
