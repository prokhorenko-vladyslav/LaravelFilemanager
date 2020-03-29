<?php


namespace Laurel\FileManager\App\Models;


use App\Contracts\ResponseContract;
use Illuminate\Support\Collection;

class Response implements ResponseContract
{

    public function setStatus(bool $status): ResponseContract
    {
        // TODO: Implement setStatus() method.
    }

    public function setErrors(array $errors): ResponseContract
    {
        // TODO: Implement setErrors() method.
    }

    public function setData(Collection $data): ResponseContract
    {
        // TODO: Implement setData() method.
    }

    public function setResponseStatus(int $responseStatus): ResponseContract
    {
        // TODO: Implement setResponseStatus() method.
    }

    public function getStatus(): bool
    {
        // TODO: Implement getStatus() method.
    }

    public function getErrors(): array
    {
        // TODO: Implement getErrors() method.
    }

    public function getData(): Collection
    {
        // TODO: Implement getData() method.
    }

    public function getResponseStatus(): int
    {
        // TODO: Implement getResponseStatus() method.
    }
}
