<?php
namespace task2\Services;

use task2\Traits\CredentialsTrait;

abstract class BaseService
{
    use CredentialsTrait;

    /**
     * Set data to service
     *
     * @param $type
     * @param array $data
     * @return mixed
     */
    public abstract function set($type, $data = []);

    /**
     * Get response from service
     *
     * @param $type
     * @return mixed
     */
    public abstract function get($type);
}
