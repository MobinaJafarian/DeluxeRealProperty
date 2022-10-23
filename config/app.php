<?php

 return [
     'APP_TITLE' => 'mvc project',
     'BASE_URL' => 'http://localhost:8000',
     'BASE_DIR' => dirname(__DIR__),
     
     //providers
     'providers' => [
        \App\Providers\SessionProvider::class,
        \App\Providers\AppServiceProvider::class,
     ]
 ];