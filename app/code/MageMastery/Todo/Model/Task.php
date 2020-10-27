<?php
namespace MageMastery\Todo\Model;

use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Api\Data\TaskInterface;

class Task extends \Magento\Framework\Model\AbstractModel implements TaskInterface
{
    protected function _construct() {
        $this->_init(TaskResource::class);
    }
    
}
