<?php
namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\TaskStatusManagementInterface;
use MageMastery\Todo\Api\TaskRepositoryInterface;
use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Api\TaskManagementInterface;

class TaskStatusManagement implements TaskStatusManagementInterface
{
    /**
     *
     * @var TaskRepositoryInterface
     */
    private $repository;

    private $management;

    /**
     *
     * @param TaskRepositoryInterface $repository
     * @param TaskManagementInterface $management
     */
    public function __construct(TaskRepositoryInterface $repository, TaskManagementInterface $management)
    {
        $this->repository = $repository;
        $this->management = $management;
    }

    public function change(int $taskId, string $status): bool
    {
        if(!in_array($status, ['open', 'complete'])) {
            return false;
        }

        $task = $this->repository->get($taskId);
        $task->setData(Task::STATUS, $status);

        $this->management->save($task);

        return true;
    }
}
