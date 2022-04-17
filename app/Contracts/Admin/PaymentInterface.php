<?php

namespace App\Contracts\Admin;

interface PaymentInterface
{
    public function index();
    public function find($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}