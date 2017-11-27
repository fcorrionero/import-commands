<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 27/11/17
 * Time: 15:22
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;

class CheckApiCommand extends Command
{

  protected function configure()
  {
    $this
      // the name of the command (the part after "bin/console")
      ->setName('app:checkapi')

      // the short description shown while running "php bin/console list"
      ->setDescription('Check console api.')

      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This commands only purpose is to check symfony command api...')

      //configure an argument
      ->addArgument('apiargument', InputArgument::REQUIRED, 'Api command argument.')
      ->addArgument('optionalargument', InputArgument::OPTIONAL, 'Api optional command argument.')
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln([
      'Writing line with writeln',
      '=========================',
      ''
    ]);
    $output->writeln('<info>Green Text</info>');
    $output->writeln('<comment>Yellow Text</comment>');
    $output->writeln('<question>black text on a cyan background</question>');
    $output->writeln('<error>white text on a red background</error>');

    $style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
    $output->getFormatter()->setStyle('fire', $style);
    $output->writeln('<fire>Using personal style</fire>');

    $output->writeln('Printing an argument: '.$input->getArgument('apiargument'));
  }

}