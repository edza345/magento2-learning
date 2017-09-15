<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.15.9
 * Time: 13:34
 */
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