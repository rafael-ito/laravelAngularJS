<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\UserRepository;
use CodeProject\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * @var UserService
     */
    private $service;

    /**
     * @param UserRepository $repository
     * @param UserService #service
     */
    public function __construct(UserRepository $repository, UserService $service) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function authenticated() {
        $userId = \Authorizer::getResourceOwnerId();
        return $this->repository->find($userId);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
