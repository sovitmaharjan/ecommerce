<?php

namespace App\Contracts\Admin;

interface AccountRequestInterface
{
    public function index();
    public function find($id);
    public function store($request);
    public function createAccount($id);
    public function destroy($id);
}
