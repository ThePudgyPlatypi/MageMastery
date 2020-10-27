<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api\Data;

interface TaskInterface
{
    public function getTaskId(): int;

    public function getStatus(): string;

    public function getLabel(): string;
}
