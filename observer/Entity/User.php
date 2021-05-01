<?php

namespace observer\Entity;

use SplSubject;

class User implements \SplObserver
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $experience;

    /**
     * User constructor.
     * @param $name
     * @param $email
     * @param $experience
     */
    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    public function update(SplSubject $subject)
    {
        echo $this->name . ' получает обновление на почту: ' . $this->email . '</br>' .
            'Название вакансии: ' . $subject->getVacancyName() . '</br>' .
            'Описание: ' . $subject->getVacancyDescription() . '</br>';
    }
}