<?php
namespace App\Core;

class App
{
    /**
     * app start
     */
    public function start()
    {
        $this->registerAlias();
        Route::exec();
    }

    private function registerAlias(){
        $alias = [
            'Route'=>Route::class
        ];
        while (list($key,$val)=each($alias)){
            class_alias($val,$key);
        }
    }


    /**
     * @param \Closure $fn
     */
    public function singleton(\Closure $fn)
    {

    }
}
