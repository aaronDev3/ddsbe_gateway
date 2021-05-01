<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

    public $user2Service;

    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    public function index(Request $request){

        return $this->successResponse($this->user2Service->obtainUsers2()); 

    }

    public function addUser(Request $request ){

        return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));

    }

        /**
        * Obtains and show one user
        * @return Illuminate\Http\Response
        */
    
    public function show($id){

        return $this->successResponse($this->user2Service->obtainUser2($id));

    }

        /**
        * Update an existing author
        * @return Illuminate\Http\Response
        */

    public function update(Request $request,$id){

        return $this->successResponse($this->user2Service->editUser2($request->all(),$id));
       
    }

        /**
        * Remove an existing user
        * @return Illuminate\Http\Response
        */

    public function delete($id){

        return $this->successResponse($this->user2Service->deleteUser2($id));

    }

}


