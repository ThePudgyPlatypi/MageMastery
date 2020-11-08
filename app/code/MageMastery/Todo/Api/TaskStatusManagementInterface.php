<?php
namespace MageMastery\Todo\Api;

/**
 * @api
 */
interface TaskStatusManagementInterface
{
    /**
     * Change task status from open to closed or vice versa
     *
     * @param integer $taskId
     * @param string $status
     * @return boolean
     */
    public function change(int $taskId, string $status): bool;
}
