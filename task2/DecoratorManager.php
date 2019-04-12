<?php
namespace task2;

class DecoratorManager extends DataProvider
{
    /**
     * Get response from selected service
     *
     * @param $type
     * @return bool|mixed
     */
    public function getResponse($type) {
        if(!$this->credentials) {
            return false;
        }

        $this->service->setCredentials($this->credentials);
        return $this->service->get($type);
    }
}
