<?php

namespace Lempzz\LaravelRunner\Core;

use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\OutputInterface;

class Runner
{
    protected $composer;

    /**
     * @var \App\Console\Kernel
    */
    protected $artisan;

    public function __construct(Composer $composer)
    {
        $this->composer = $composer;

        $this->artisan = Artisan::getFacadeRoot();
    }

    public function composer(string $command)
    {
        $this->composer->exec($command);
    }

    public function dumpAutoloads($extra = '')
    {
        $this->composer->dumpAutoloads($extra);
    }

    /**
     * Run an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @param  OutputInterface  $outputBuffer
     * @return int
     */
    public function artisan(string $command, array $parameters = [], OutputInterface $outputBuffer = null)
    {
        return $this->artisan->call($command, $parameters, $outputBuffer);
    }
}