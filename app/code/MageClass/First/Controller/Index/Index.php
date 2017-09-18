<?php

namespace MageClass\First\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_test;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MageClass\First\Model\Test $test
    )
    {
        $this->_test = $test;
        parent::__construct($context);
    }
    public function execute()
    {
        $this->_test->sayHi();
    }
}