<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repo {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $this->createDir("app/Repositories");
        $this->createDir("app/Contracts");
        $interface = "<?php\n" .
            "namespace App\Contracts;\n\n" .
            "interface {$name}Interface{\n\n}";
        $this->create_file("app/Contracts/{$name}Interface.php", $interface);
        $repository = "<?php\n" .
            "namespace App\Repositories;\n\n" .
            "use App\Contracts\\{$name}Interface;\n\n" .
            "class {$name}Repository implements {$name}Interface{\n\n}";
        $this->create_file("app/Repositories/{$name}Repository.php", $repository);
    }
    
    public function create_file($path, $content) {
        $this->createDir($path);
        if (File::exists($path)) {
            $this->error("File {$path} already exists!");
            return;
        }
        File::put($path, $content);
        $this->info("File {$path} created.");
    }

    public function createDir($path)
    {
        $dir = dirname($path);
        if (!file_exists($dir)) {
            mkdir($dir, 0775, true);
        }
    }
}
