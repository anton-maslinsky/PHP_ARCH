<?php


namespace src\IdentityMap;


use src\Contract\DomainObjectInterface;

class IdentityMap
{
    /**
     *
     * Массив для хранения объектов, полученных ранее из бд.
     * @var array
     */
    private $identityMap = [];

    /**
     * Метод возвращает ключ для хранения в массиве $identityMap в виде склеенного $classname и $id
     * @param string $classname
     * @param int $id
     * @return string
     */
    private function getGlobalKey(string $classname, int $id)
    {
        return sprintf('%s.%d', $classname, $id);
    }

    /**
     * Метод добавляет объект в массив $identityMap
     * @param DomainObjectInterface $obj
     */
    public function add(DomainObjectInterface $obj)
    {
            $key = $this->getGlobalKey(get_class($obj), $obj->getId());
            $this->identityMap[$key] = $key;
    }

    /**
     * Метод ищет объект в массиве $identityMap
     * @param string $classname
     * @param int $id
     * @return mixed|null
     */
    public function find(string $classname, int $id)
    {
        $key = $this->getGlobalKey($classname, $id);
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }
}