<?php

namespace Lobbster\Adminko\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute(): Page
    {
        // TODO: Implement execute() method.
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Lobbster_Adminko::post');
        $resultPage->getConfig()->getTitle()->prepend(__('Edit Posts'));

        return $resultPage;
    }
}
