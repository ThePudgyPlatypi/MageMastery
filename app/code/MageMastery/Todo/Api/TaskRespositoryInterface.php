<?php
namespace MageMastery\Todo\Api;

/**
 * @api
 */

interface TaskRepositoryInterface
{
    public function save();
    public function delete();

}
