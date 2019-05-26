<?php
require_once('interface.php');
class Newsletter implements Subject {
    
    private $observers = array();
    private $newsletter;
    
    public function __construct($newsletter) {
        $this->newsletter = $newsletter;
    }
    
    public function attach(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function notify()
    {
        foreach($this->observers as $o)
        {
            $o->update($this);
        }
    }

    public function changeLetter($newsletter) {
        $this->newsletter = $newsletter; 
        $this->notify();
    }

    public function show() {
        echo '<img src="'.$this->newsletter.'" alt="icon" />';
    }

    public function getLocation(){
        return $this->newsletter;
    }
}




