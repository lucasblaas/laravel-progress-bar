<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Integrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:progress-bar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the progress bar for command line execution';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        Command::getOutput()->progressStart(count($numbers));
        foreach ($numbers as $number) {
            //some action
            Command::getOutput()->progressAdvance();
        }
        Command::getOutput()->progressFinish();

        $this->info('Processo finalizado!');
    }
}
