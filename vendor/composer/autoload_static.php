<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4bd6f758a3b839e4031e4badafba7e5
{
    public static $classMap = array (
        'App\\controller\\IndexController' => __DIR__ . '/../..' . '/App/controller/IndexController.class.php',
        'App\\model\\index\\IndexModel' => __DIR__ . '/../..' . '/App/model/index/IndexModel.class.php',
        'Core\\App' => __DIR__ . '/../..' . '/Core/App.class.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/Core/Controller.class.php',
        'Core\\Core' => __DIR__ . '/../..' . '/Core/Core.class.php',
        'Core\\Custom' => __DIR__ . '/../..' . '/Core/Custom.class.php',
        'Core\\Error' => __DIR__ . '/../..' . '/Core/Error.class.php',
        'Core\\Factory' => __DIR__ . '/../..' . '/Core/Factory.class.php',
        'Core\\Filter' => __DIR__ . '/../..' . '/Core/Filter.class.php',
        'Core\\Hello\\Build\\BuildComponent' => __DIR__ . '/../..' . '/Core/Hello/Build/BuildComponent.class.php',
        'Core\\Hello\\Build\\BuildFile' => __DIR__ . '/../..' . '/Core/Hello/Build/BuildFile.class.php',
        'Core\\Hello\\Build\\BuildView' => __DIR__ . '/../..' . '/Core/Hello/Build/BuildView.class.php',
        'Core\\Hello\\Build\\Load' => __DIR__ . '/../..' . '/Core/Hello/Load.class.php',
        'Core\\Hello\\Build\\SystemBuild' => __DIR__ . '/../..' . '/Core/Hello/Build/SystemBuild.class.php',
        'Core\\Hello\\LoadInterFace' => __DIR__ . '/../..' . '/Core/Hello/LoadInterFace.php',
        'Core\\Hello\\MiddlewareInterFace' => __DIR__ . '/../..' . '/Core/Hello/MiddlewareInterFace.class.php',
        'Core\\Hello\\Middleware\\Auth' => __DIR__ . '/../..' . '/Core/Hello/Middleware/Auth.class.php',
        'Core\\Heplers' => __DIR__ . '/../..' . '/Core/heplers.php',
        'Core\\Http\\Cookie' => __DIR__ . '/../..' . '/Core/Http/Cookie.class.php',
        'Core\\Http\\Request' => __DIR__ . '/../..' . '/Core/Http/Request.class.php',
        'Core\\Middleware' => __DIR__ . '/../..' . '/Core/Middleware.class.php',
        'Core\\Model' => __DIR__ . '/../..' . '/Core/Model.class.php',
        'Core\\RouteService' => __DIR__ . '/../..' . '/Core/RouteService.class.php',
        'Core\\Validate' => __DIR__ . '/../..' . '/Core/Validate.class.php',
        'Core\\ValidateInterface' => __DIR__ . '/../..' . '/Core/ValidateInterface.php',
        'Core\\db\\Db' => __DIR__ . '/../..' . '/Core/db/Db.class.php',
        'Core\\db\\Driver' => __DIR__ . '/../..' . '/Core/db/Driver.class.php',
        'Core\\db\\driver\\Mysql' => __DIR__ . '/../..' . '/Core/db/driver/Mysql.class.php',
        'View\\Compiled\\Compiler' => __DIR__ . '/../..' . '/View/Compiled/Compiler.php',
        'View\\Compiled\\CompilerInterface' => __DIR__ . '/../..' . '/View/Compiled/CompilerInterface.php',
        'View\\Compiled\\Concerns\\CompilesEchos' => __DIR__ . '/../..' . '/View/Compiled/Concerns/CompilesEchos.php',
        'View\\Compiled\\HelloCompiler' => __DIR__ . '/../..' . '/View/Compiled/HelloCompiler.php',
        'View\\Engine\\CompilerEngine' => __DIR__ . '/../..' . '/View/Engine/CompilerEngine.php',
        'View\\Engine\\EngineInterface' => __DIR__ . '/../..' . '/View/Engine/EngineInterface.php',
        'View\\FileViewFinder' => __DIR__ . '/../..' . '/View/FileViewFinder.php',
        'View\\HelloEngine' => __DIR__ . '/../..' . '/View/Engine/HelloEngine.php',
        'View\\Support\\Filesystem' => __DIR__ . '/../..' . '/View/Support/Filesystem.php',
        'View\\Support\\Str' => __DIR__ . '/../..' . '/View/Support/Str.php',
        'View\\View' => __DIR__ . '/../..' . '/View/View.php',
        'View\\ViewFactory' => __DIR__ . '/../..' . '/View/ViewFactory.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita4bd6f758a3b839e4031e4badafba7e5::$classMap;

        }, null, ClassLoader::class);
    }
}
