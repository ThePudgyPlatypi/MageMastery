<?php
namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\TaskManagementInterface;
use MageMastery\Todo\Model\ResouceModel\Task;

class TaskManagement implements TaskManagementInterface
{
    private $resource;

    public function __construct(Task $resource)
    {
        $this->resource = $resource;
    }

    public function save($task) {
        $this->resource->save($task);
    }

    public function delete($task) {
        $this->resource->delete($task);
    }
}
