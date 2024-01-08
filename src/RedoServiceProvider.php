<?php

namespace Hrsa\Redo;

use Hrsa\Redo\Console\RedoCommand;
use Illuminate\Database\MigrationServiceProvider;

class RedoServiceProvider extends MigrationServiceProvider
{
    protected $commands = [
        'MigrateRedo' => RedoCommand::class,
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        parent::register();
        $this->registerCommands($this->commands);
        $this->registerMigrateRedoCommand();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerMigrateRedoCommand(): void
    {
        $this->app->singleton(RedoCommand::class, function($app) {
            return new RedoCommand($app['migrator']);
        });
    }
}
