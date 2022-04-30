<?php

namespace App\Contracts\Admin;

interface UserProfileInterface
{
    public function index();
    public function find($id);
    public function store($request);
    public function destroy($id);
}
