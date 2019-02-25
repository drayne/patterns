<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.9.2018.
 * Time: 19:18
 */

namespace App\DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Observer implements SplObserver
{

    /**
     * @var  string
     */
    protected $name;

    /**
     * @var int
     */
    protected $priority = 0;

    /**
     * Accepts observer name and priority, default to zero
     */
    public function __construct($name, $priority=0)
    {
        $this->name =$name;
        $this->priority =$priority;
    }

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $publisher)
    {
        print_r($this->name.': '. $publisher->getEvent(). PHP_EOL);
    }

    /**
     * Get observer priority
     *
     * @return int
     */
    public  function getPriority(){
        return $this->priority;
    }
}