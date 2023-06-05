<?php

namespace App\Console\Commands;

use App\Models\Permission;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;



class initpermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'for storing permission routes';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $data='';
        foreach(Route::getRoutes() as $key=>$route){
            if($route->getName() && $route->getPrefix() != '' && $route->getPrefix() != 'sanctum' && $route->getPrefix() != '_ignition'){
                Permission::updateOrCreate([
                    'name'=>$route->getName(),
                    'status'=>'active'

                ]);
            }
        }

        echo "permission stored succesfully";
    }
}
