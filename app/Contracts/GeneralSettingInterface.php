<?php

namespace App\Contracts;

interface GeneralSettingInterface
{
    public function index();
    public function store($request);
    public function update($request, $id);
}
