<?php
interface Observer{
    public function update(Subject $subject);
}

interface Subject{
    public function attach(Observer $observer);
    public function notify();
}