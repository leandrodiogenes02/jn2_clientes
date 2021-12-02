<?php

namespace App\Console\Commands;

use Database\Seeders\ScribeDocsSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class ScribeGenerateCommand extends Command {
    protected $signature = 'docs';

    protected $description = 'Gera documentação utilizando a lib do scribe';

    public function handle() {
        Config::set('database.default', 'documentation');
        Artisan::call('migrate:fresh', ['--force' => true, '--env' => 'documentation'], $this->getOutput());
        Artisan::call('db:seed', ['--force' => true, '--env' => 'documentation', '--class' => ScribeDocsSeeder::class], $this->getOutput());
        Artisan::call('scribe:generate', ['--force' => true, '--env' => 'documentation'], $this->getOutput());
    }
}
