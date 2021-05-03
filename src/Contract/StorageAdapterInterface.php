<?php


namespace src\Contract;


interface StorageAdapterInterface
{
    public function find(int $id): ?array;
}