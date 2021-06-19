<?php


class StopWatch
{
    public $startTime;
    public $endTime;


    public function __construct()
    {
        $this->startTime = round(microtime(true) * 1000);
        $this->endTime = round(microtime(true) * 1000);
    }


    public function startTime()
    {
        return $this->startTime;
    }

    public function EndTime()
    {
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->startTime - $this->endTime;
    }

}
$stopwatch=new StopWatch();
echo $stopwatch->startTime;
echo "<br>";
echo $stopwatch->EndTime();
echo "<br>";
echo $stopwatch->getElapsedTime();
