<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service{

    use ConsumesExternalService;

    /**
     * The base uri to consume the User1 Service
     * @var string
     */

    public $baseUri;
    public $secret;

    public function __construct(){

        $this->baseUri = config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }

    /**
     * Obtain the full list of Users from User1 Site
     * @return string
     */

    public function obtainUsers1(){

        return $this->performRequest('GET','/users1'); 
        //this code will call the GETlocalhost:8000/users (our site1)

    }

    public function createUser1($data){

        return $this->performRequest('POST', '/users1', $data);

    }

    public function obtainUser1($id){

        return $this->performRequest('GET', "/users1/{$id}");

    }

    public function editUser1($data, $id){

        return $this->performRequest('PUT',"/users1/{$id}", $data);

    }

    public function deleteUser1($id){

        return $this->performRequest('DELETE', "/users1/{$id}");

    }
}