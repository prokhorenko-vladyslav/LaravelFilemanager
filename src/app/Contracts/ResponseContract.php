<?php


namespace Laurel\FileManager\App\Contracts;


use Illuminate\Support\Collection;

interface ResponseContract
{
    public function setStatus(bool $status)                 : ResponseContract;
    public function setErrors(array $errors)                : ResponseContract;
    public function setData(Collection $data)               : ResponseContract;
    public function setResponseStatus(int $responseStatus)  : ResponseContract;

    public function getStatus()         : bool;
    public function getErrors()         : array;
    public function getData()           : Collection;
    public function getResponseStatus() : int;
}
