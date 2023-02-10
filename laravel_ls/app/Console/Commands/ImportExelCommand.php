<?php

namespace App\Console\Commands;

use App\Imports\PostsImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportExelCommand extends Command
{

    protected $signature = 'import:excel';
    protected $description = 'Get data from exel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('memory_limit','-1');
        Excel::import(new PostsImport(), public_path('excel/posts.xlsx'));
        dd('finish');
    }
}
