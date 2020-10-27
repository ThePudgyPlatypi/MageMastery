<?php
namespace MageMastery\Todo\Model;

use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Api\Data\TaskInterface;

class Task extends \Magento\Framework\Model\AbstractModel implements TaskInterface
{
    const TASK_ID = 'task_id';
    const STATUS = 'status';
    const LABEL = 'label';

    protected function _construct() {
        $this->_init(TaskResource::class);
    }
    
    public function getTaskId() {
        return $this->getData(self::TASK_ID);
    }

    public function getStatus() {
        return $this->getData(self::STATUS);
    }

    public function getLabel() {
        return $this->getData(self::LABEL);
    }
}
