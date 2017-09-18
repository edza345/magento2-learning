<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.18.9
 * Time: 13:36
 */
namespace MageClass\Second\Model;
use Magento\Catalog\Model\Product;
class Products extends \Magento\Framework\Model\AbstractModel
{
    protected $_productFactory;
    public function __construct(
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->_productFactory = $productFactory;
    }
    public function getOddProductCollection()
    {
        $collection = $this->_productFactory->create()->getCollection();
        $collection->addAttributeToSelect("*");
        $collection->setPageSize(10);
        return $collection;
    }
    public function sayHi()
    {
        echo "hello world !2";
    }
}