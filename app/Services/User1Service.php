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

        $this->baseUri = config('services.books.base_uri');
        $this->secret = config('services.books.secret');
    }

    /**
     * Obtain the full list of Users from User1 Site
     * @return string
     */

    public function obtainUsers1(){

        return $this->performRequest('GET','/books'); 
        //this code will call the GETlocalhost:8000/users (our site1)

    }

    public function createUser1($data){

        return $this->performRequest('POST', '/books', $data);

    }

    public function obtainUser1($id){

        return $this->performRequest('GET', "/books/{$id}");

    }

    public function editUser1($data, $id){

        return $this->performRequest('PUT',"/books/{$id}", $data);

    }

    public function deleteUser1($id){

        return $this->performRequest('DELETE', "/books/{$id}");

    }
}