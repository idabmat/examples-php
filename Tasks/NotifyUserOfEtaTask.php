<?php

use Zenaton\Interfaces\TaskInterface;
use Zenaton\Traits\Zenatonable;

class NotifyUserOfEtaTask implements TaskInterface
{
    use Zenatonable;

    protected $eta;

    public function __construct($eta)
    {
        $this->eta = $eta;
    }

    public function handle()
    {
        echo 'Estimated Time of Arrival: '.$this->eta.PHP_EOL;
    }
}