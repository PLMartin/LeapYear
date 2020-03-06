<?php

namespace App\View;


use App\Model\LeapYear;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LeapYearConsole extends Command
{
    protected static $defaultName = 'app:launch';


    protected function execute(InputInterface $input, OutputInterface $output)
    {

        return 0;
    }
}