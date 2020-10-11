<?php
namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\TaskRepositoryInterface;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Model\TaskFactory;

class TaskRepository implements TaskRepositoryInterface
{
    private $taskResource;
    private $taskFactory;

    public function __construct(TaskResource $taskResource, TaskFactory $taskFactory)
    {
        $this->taskResource = $taskResource;
        $this->taskFactory = $taskFactory;
    }

    public function get(int $taskId) {
        $object = $this->taskFactory->create();
        $this->taskResource->load($object, $taskId);
        return $object;
    }

    public function getList() {

    }
}
