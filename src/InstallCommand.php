<?php

namespace Ajifatur\FaturDocker;

use Illuminate\Console\Command;
use Ajifatur\FaturDocker\FaturDockerServiceProvider;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faturdocker:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install FaturDocker package';

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
     *
     * @return void
     */
    public function handle()
    {
        // Installing info
        $this->info('Installing FaturDocker package.');

        // Publish
        $this->call('vendor:publish', ['--provider' => FaturDockerServiceProvider::class, '--tag' => 'faturdocker']);

        // Success info
        $this->info('Successfully installing FaturDocker! Enjoy!');
    }
}