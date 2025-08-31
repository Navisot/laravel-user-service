<?php

namespace App\Services;

class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = config('microservices.api_users_host') . '/api';
    }

}
