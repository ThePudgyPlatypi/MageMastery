<?php

declare(strict_types=1);

namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\TaskManagementInterface;
use MageMastery\Todo\Model\ResourceModel\Task;

class TaskManagement implements TaskManagementInterface
{
    private $resource;

    public function __construct(Task $resource)
    {
        $this->resource = $resource;
    }

    /**
     *
     * @param TaskInterface $task
     * @return boolean
     */
    public function save(TaskInterface $task): bool
    {
        $this->resource->save($task);
        return true;
    }
    
    /**
     *
     * @param TaskInterface $task
     * @return boolean
     */
    public function delete(TaskInterface $task): bool
    {
        $this->resource->delete($task);
        return true;
    }
}