<?php


class StopWatch
{
private $time;
public function __construct($time)
{
    $this->time=$time;
}
public function startTime(){
    return $date=date('d/m/Y');
}
}