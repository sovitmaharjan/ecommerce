<?php
namespace App\Contracts;

interface BannerInterface{
    public function findAll();
    public function find();
    public function store($request);
    public function update();
    public function destroy();
}