<?php
namespace Lobbster\NP\Block;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Helper\Output as OutputHelper;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;

class Products extends \Magento\Catalog\Block\Product\ListProduct
{

    public function __construct(Context $context, PostHelper $postDataHelper, Resolver $layerResolver, CategoryRepositoryInterface $categoryRepository, Data $urlHelper, array $data = [], ?OutputHelper $outputHelper = null)
    {
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $data, $outputHelper);
    }
    public function getRelatedProducts()
    {

        $_relatedProducts = $this->getProduct()->getRelatedProductCollection();
        $_relatedProducts->addAttributeToSelect('*');
        return $_relatedProducts;
    }
}
