<?php
namespace MageMastery\Todo\Model;

use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

class Task extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct() {
        $this->_init(TaskResource::class);
    }
    
}
