<?php

namespace MageClass\Second\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pcollection;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MageClass\Second\Model\Products $products
    )
    {
        $this->_pcollection = $products;
        parent::__construct($context);
    }
    public function execute()
    {
        $this->_pcollection->getOddProductCollection();
    }
    public function getProducts()
    {
        $this->_pcollection->getOddProductCollection();
    }
}