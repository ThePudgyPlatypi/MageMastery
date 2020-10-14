<?php
namespace MageMastery\Todo\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;

/**
 * @api
 */

interface TaskRepositoryInterface
{
    public function getList(SearchCriteriaInterface $seachCriteria): TaskSearchResultInterface;
    public function get(int $taskId);

}
