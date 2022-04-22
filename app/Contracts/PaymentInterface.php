<?php

namespace App\Contracts;

interface PaymentInterface
{
    public function index();
    public function find($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}