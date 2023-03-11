<?php

namespace Ilasisi\SendInBlue;

use Exception;
use SendinBlue\Client\Api\ContactsApi;
use SendinBlue\Client\Configuration;

class SendInBlue
{
    /**
     * SendInBlue API Key
     *
     * @var string
     */
    public $apiKey;

    /**
     * SendInBlue config
     *
     * @var Configuration
     */
    public $config;

     /**
     * SendInBlue Account Instance
     *
     * @var ContactsApi
     */
    public $contactInstance;

    public function __construct()
    {
        $this->setApiKey();
        $this->setConfig();
        $this->setContactInstance();
    }

    public function setApiKey(): void
    {
        $this->apiKey = config('sendinblue.api_key');
    }

    public function setConfig(): void
    {
        $this->config = Configuration::getDefaultConfiguration()
            ->setApiKey('api-key', $this->apiKey);
    }

    public function getContacts(): \SendinBlue\Client\Model\GetContacts
    {
        try {
            return $this->contactInstance->getContacts();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function setContactInstance(): void
    {
        $this->contactInstance = new ContactsApi(config: $this->config);
    }
}
