<?php
namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

class Index extends Action
{
    private $taskFactory;
    private $taskResource;

    public function __construct(Context $context, TaskResource $taskResource, TaskFactory $taskFactory) {
        $this->taskFactory = $taskFactory;
        $this->taskResource = $taskResource;

        parent::__construct($context);
    }

    public function execute() {
        $task = $this->taskFactory->create();
        $task->setData([
            'label' => 'Test Task',
            'status' => 'open',
            'customer_id' => 1
        ]);

        $this->taskResource->save($task);

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
