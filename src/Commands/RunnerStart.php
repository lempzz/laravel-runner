<?php

namespace Lempzz\LaravelRunner\Commands;

use Illuminate\Console\Command;
use Lempzz\LaravelRunner\Core\Composer;
use Lempzz\LaravelRunner\Core\Runner;

class RunnerStart extends Command
{
    protected $signature = 'runner:start';

    protected $description = 'Run needle commands';

    protected $composer;
    /**
     * Create a new command instance.
     * @param Composer $composer
     * @return void
     */
    public function __construct(Composer $composer)
    {
        $this->composer = $composer;

        parent::__construct();
    }

    /**
     * Execute the console command.
     * @throws \RuntimeException
     * @return mixed
     */
    public function handle()
    {
        $this->canStart();

        $this->start();
    }

    public function canStart()
    {
        $dir = base_path('database/runner');

        if (!is_dir($dir)) {
            throw new \RuntimeException("Directory $dir should be exists");
        }
    }

    public function start()
    {
//        $runner = new Runner($this->composer);
//
//        $runner->artisan('list');
    }
}
