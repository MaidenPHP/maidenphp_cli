<?php

namespace Maiden;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MaidenCommand extends Command
{
    public function configure()
    {
        $this->setName('create-project')
             ->setDescription('Creates a new copy of the Maiden framework Application')
             ->addArgument('name', InputArgument::OPTIONAL, 'maiden')
             ->addOption('greeting', null, InputOption::VALUE_OPTIONAL, 'Override the default greeting', 'hello');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $message = sprintf('%s, %s', $input->getOption('greeting'), $input->getArgument('name'));

        $output->writeln("<h2>{$message}</h2>");
    }

}