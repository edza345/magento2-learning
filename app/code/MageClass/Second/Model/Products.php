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
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productFactory
    ) {
        $this->_productFactory = $productFactory;
    }
    public function getOddProductCollection($id = null) {
        $data = $this->_productFactory->create();
        $data->addFieldToFilter('status', 1);
        $data->addFieldToFilter('type_id', 'simple');

        if ($id) {
            $data->addFieldToFilter('entity_id', $id);
        }
        $data->addAttributeToSelect('*');
        return $data->load()->toArray();
    }
    public function sayHi()
    {
        echo "hello world !2";
    }
}