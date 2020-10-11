<?php
namespace MageMastery\Todo\Model;

use MageMastery\Model\ResourceModel\Task as TaskResouce;

class Task extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct() {
        $this->_init(TaskResouce::class);
    }
    
}
