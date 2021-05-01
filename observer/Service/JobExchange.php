<?php

namespace observer\Service;


use SplObserver;

class JobExchange implements \SplSubject
{

    private $vacancyName;
    private $vacancyDescription;
    private $observers = array();

    /**
     * JobExchange constructor.
     * @param $vacancyName
     * @param $vacancyDescription
     */
    public function __construct($vacancyName, $vacancyDescription)
    {
        $this->vacancyName = $vacancyName;
        $this->vacancyDescription = $vacancyDescription;
    }


    public function attach(SplObserver $observer)
    {
        $userName = $observer->getName();
        $this->observers[] = $observer;
        echo $userName . ' подписался на обновления!' . '</br>';
    }

    public function detach(SplObserver $observer)
    {
        $userName = $observer->getName();
        $key = array_search($observer, $this->observers, true);
       if (false !== $key) {
           unset($this->observers[$key]);
           echo $userName . ' отменил подписку на обновления!' . '</br>';
       }
    }

    /**
     * @return mixed
     */
    public function getVacancyName()
    {
        return $this->vacancyName;
    }

    /**
     * @return mixed
     */
    public function getVacancyDescription()
    {
        return $this->vacancyDescription;
    }



    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}