<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.9.2018.
 * Time: 18:49
 */

namespace App\DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Publisher implements SplSubject
{

    protected $linkedList = array();
    protected $observers = array();
    protected $name;
    protected $event;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
        $this->linkedList[$observerKey] = $observer->getPriority();
        asort($this->linkedList);
    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
        unset($this->linkedList[$observerKey]);
    }

    /**
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach ($this->linkedList as $key => $value) {
            $this->observers[$key]->update($this);
        }
    }

    /**
     * Set or update event
     *
     * @param $event
     * @return void
     */
    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function getSubscribers()
    {
        return $this->getSubscribers();
    }
}