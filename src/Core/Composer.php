<?php

namespace Lempzz\LaravelRunner\Core;

use Illuminate\Support\Composer as LaravelComposer;

class Composer extends LaravelComposer
{
    public function exec(string $command)
    {
        $process = $this->getProcess();

        $process->setCommandLine(trim("{$this->findComposer()} $command"));

        $process->run();
    }
}