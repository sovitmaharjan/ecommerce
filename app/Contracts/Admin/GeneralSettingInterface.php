<?php

namespace App\Contracts\Admin;

interface GeneralSettingInterface
{
    public function index();
    public function store($request);
    public function update($request, $id);
}
