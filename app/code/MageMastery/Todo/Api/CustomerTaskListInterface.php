<?php
namespace MageMastery\Todo\Api;

use MageMaster\Todo\Api\Data\TaskInterface;

interface CustomerTaskListInterface
{
    /**
     * 
     * @return TaskInterface[]
     */
    public function getList();
}
