<?php
namespace MageMastery\Todo\Model\ResourceModel\Task;

use MageMastery\Todo\Model\Task;
use MageMaster\Todo\Model\ResourceModel\Task as TaskResource;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Task::class, TaskResouce::class);
    }
}
