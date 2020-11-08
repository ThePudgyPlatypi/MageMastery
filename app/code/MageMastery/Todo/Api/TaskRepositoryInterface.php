<?php

namespace MageMastery\Todo\Api;

use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * @api
 */
interface TaskRepositoryInterface
{
    /**
     * Undocumented function
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return TaskSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface;

    /**
     * Undocumented function
     *
     * @param integer $taskId
     * @return void
     */
    public function get(int $taskId);
}