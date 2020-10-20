<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface TaskSearchResultInterface extends SearchResultsInterface
{
    /**
     *
     * @return TaskInterface[]
     */
    public function getItems();

    /**
     * @param TaskInterface[]
     * @return SearchResultsInterface
     */

    public function setItems(array $items);
}
