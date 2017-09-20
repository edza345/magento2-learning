<?php

namespace MageClass\Second\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pcollection;
    protected $_storeManager;
    protected $_urlInterface;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MageClass\Second\Model\Products $products,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlInterface
    )
    {
        $this->_pcollection = $products;
        $this->_storeManager = $storeManager;
        $this->_urlInterface = $urlInterface;
        parent::__construct($context);
    }
    public function execute()
    {
//        $mediaUrl = $this->_urlInterface->getBaseUrl()."pub/media/catalog/product";
//        $collection = $this->_pcollection->getOddProductCollection();
//        foreach($collection as $product){
//            echo "<div style='display: inline-block; width: 19.9%; margin-left: 5%'>".
//                "<div><img style='max-width: 100%;' src='".$mediaUrl.$product['image']."'/></div>".
//                "<div>".$product['name']."</div>".
//                "<div>".$product['price']."</div>".
//            "</div>";

//        }
    }
}