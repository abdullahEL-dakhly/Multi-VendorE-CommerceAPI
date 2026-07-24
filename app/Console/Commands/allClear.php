<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

#[Signature('clr')]
#[Description('Command description')]
class allClear extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('route:cache');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        $this->info('clear all successfully');
    }
}
