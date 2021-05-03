<?php


namespace src\Storage;


use src\Contract\StorageAdapterInterface;

class StorageAdapter implements StorageAdapterInterface
{

    /**
     *
     * Получает позьзователей из бд по $id
     * @param int $id
     * @return array|null
     */
    public function find(int $id): ?array
    {

        if ($id === 1) {
            return [
                'id' => 3,
                'name' => 'Ivanov Ivan Ivanovich',
                'login' => 'i**extends',
                'password' => '$2y$10$TcQdU.qWG0s7XGeIqnhquOH/v3r2KKbes8bLIL6NFWpqfFn.cwWha',
                'role' => 'admin'
            ];
        }
        return null;
    }

}