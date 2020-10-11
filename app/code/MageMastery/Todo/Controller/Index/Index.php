<?php
namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Service\TaskRepository;

class Index extends Action
{
    private $taskFactory;
    private $taskResource;
    private $taskRepository;

    public function __construct(
        Context $context, 
        TaskResource $taskResource, 
        TaskFactory $taskFactory, 
        TaskRepository $taskRepository) 
    {
            $this->taskFactory = $taskFactory;
            $this->taskResource = $taskResource;
            $this->taskRepository = $taskRepository;
            parent::__construct($context);
    }

    public function execute() {
        // $task = $this->taskFactory->create();
        // $task->setData([
        //     'label' => 'Test Task',
        //     'status' => 'open',
        //     'customer_id' => 1
        // ]);

        // $this->taskResource->save($task);

        $task = $this->taskRepository->get(1);
        var_dump($task->getData());

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
