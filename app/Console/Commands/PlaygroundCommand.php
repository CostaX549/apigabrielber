<?php

namespace App\Console\Commands;

use App\Events\TestingReverbEvent;
use Illuminate\Console\Command;

class PlaygroundCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:playground-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      foreach(range(1,60) as $i) {
        TestingReverbEvent::dispatch($i);
      }
    }
}
