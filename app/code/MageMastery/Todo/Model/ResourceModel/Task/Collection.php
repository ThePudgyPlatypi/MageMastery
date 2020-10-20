<?php
namespace MageMastery\Todo\Model\ResourceModel\Task;

use MageMastery\Todo\Model\Task;
use MageMaster\Todo\Model\ResourceModel\Task as TaskResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\framework\Api\SearchCriteriaInterface;

class Collection extends AbstractCollection implements TaskSearchResultInterface
{
    private $searchCriteria;

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }


    public function setItems(array $items = null) {
        if (!$items) {
            return $this;
        }

        foreach($item as $items) {
            $this->addItem($item);
        }
        
        return $this;
    }

    public function getSearchCriteria() {
        return $this->searchCriteria;
    }

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null) {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    public function getTotalCount() {
        return $this->getSize();
    }

    public function setTotalCount($totalCount) {
        return $this;
    }
}
