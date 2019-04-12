<?php
namespace task2;

use task2\Services\BaseService;
use task2\Traits\CredentialsTrait;

abstract class DataProvider
{
    use CredentialsTrait;

    /**
     * Selected service
     *
     * @var BaseService
     */
    protected $service;

    public function __construct(BaseService $service)
    {
        $this->service = $service;
    }
}
