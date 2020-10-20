<?php
namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\TaskRepositoryInterface;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use MageMastery\Todo\Api\Data\TaskSearchResultInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class TaskRepository implements TaskRepositoryInterface
{
    private $taskResource;
    private $taskFactory;
    private $searchResultsFactory;
    private $collectionProcessor;

    public function __construct(
        TaskResource $taskResource, 
        TaskFactory $taskFactory,
        CollectionProcessorInterface $collectionInterface,
        TaskSearchResultInterfaceFactory $searchResultFactory)
    {
        $this->taskResource = $taskResource;
        $this->taskFactory = $taskFactory;
        $this->collectionProcessor = $collectionInterface;
        $this->searchResultsFactory = $searchResultFactory;
    }

    public function get(int $taskId) {
        $object = $this->taskFactory->create();
        $this->taskResource->load($object, $taskId);
        return $object;
    }

    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface {
        $searchResult = $this->searchResultsFactory->create();
        $searchResult->setSearchCriteria($searchCriteria);
        $this->collectionProcessor->process($searchCriteria, $searchResult);

        return $searchResult;
    }
}
