<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api\Data;

/**
 * @api
 */
interface TaskInterface
{
    /**
     * @return int
     */
    public function getTaskId(): int;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * Set Id of Task
     * 
     * @param integer $taskId
     * @return void
     */
    public function setTaskId(int $taskId);

    /**
     * Set Status of Task
     * 
     * @param string $status
     * @return void
     */
    public function setStatus(string $status);

    /**
     * Set Label of task
     *
     * @param string $label
     * @return void
     */
    public function setLabel(string $label);

}
