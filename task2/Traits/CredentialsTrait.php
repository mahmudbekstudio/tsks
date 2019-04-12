<?php

namespace task2\Traits;

trait CredentialsTrait
{
    /**
     * Credentials.
     *
     * @var array
     */
    protected $credentials;

    /**
     * Set credentials
     *
     * @param array $credentials
     *
     * @return void
     */
    public function setCredentials(array $credentials)
    {
        $this->credentials = $credentials;
    }
}
