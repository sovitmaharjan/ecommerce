<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create';

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
        $name = $this->argument('name');
        // $path = $this->viewPath($name);
        $this->create_file("resources/views/admin/". strtolower($name). "/create.blade.php");
        $this->create_file("resources/views/admin/". strtolower($name). "/edit.blade.php");
        $this->create_file("resources/views/admin/". strtolower($name). "/index.blade.php");
        $this->create_file("resources/views/admin/". strtolower($name). "/show.blade.php");

        Artisan::call("make:model Admin/{$name} -mfs");
        $this->info("Model Admin/{$name} created.");
        Artisan::call("make:controller Admin/{$name}Controller --model=Admin/{$name} -r --requests");
        $this->info(Artisan::output());
    }
    
    public function create_file($path) {
        $this->createDir($path);
        if (File::exists($path)) {
            $this->error("File {$path} already exists!");
            return;
        }
        File::put($path, $path);
        $this->info("File {$path} created.");
    }

    public function viewPath($name)
    {
        $name = str_replace('.', '/', $name) . '.blade.php';

        $path = "resources/views/{$name}";

        return $path;
    }

    public function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }

}