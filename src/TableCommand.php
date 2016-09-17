<?php

namespace Maiden;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TableCommand extends Command
{
    public function configure()
    {
        $this->setName('table')
            ->setDescription('Creates a new copy of the Maiden framework Application')
            ->addArgument('name', InputArgument::OPTIONAL, 'maiden')
            ->addOption('greeting', null, InputOption::VALUE_OPTIONAL, 'Override the default greeting', 'hello');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);

        $table->setHeaders(['age', 'gender', 'location'])
              ->setRows([
                [10, 'M', 'Toronto'],
                [10, 'M', 'Toronto'],
                [10, 'M', 'Toronto'],
                [],
              ])
              ->render();
    }

}