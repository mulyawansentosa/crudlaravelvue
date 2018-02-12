<?php namespace Bantenprov\Provinsi\Console\Commands;

use Illuminate\Console\Command;

/**
 * The ProvinsiCommand class.
 *
 * @package Bantenprov\Provinsi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProvinsiCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:provinsi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Provinsi package';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\Provinsi package');
    }
}
