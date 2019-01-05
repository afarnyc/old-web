<?php
error_reporting(E_ALL);

use Phalcon\Config\Adapter\Ini as ConfigIni;

try {
    //Setup configuration
    $config = new ConfigIni('../app/config/config.ini');

    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        $config->app->controllers,
        $config->app->models,
        )
    )->register();

    //Create a dependency injector
    $di = new Phalcon\DI\FactoryDefault();
    $di -> set('config', $config);

    //Setup the view component
    $di->set('view', function() use($config, $di){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir($config->app->views);

        //Setup Volt
        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
        $volt->setOptions(array(
            'compiledPath'      => $config->volt->path,
            'compiledExtension' => $config->volt->extension,
            'compiledSeparator' => $config->volt->separator,
            'stat'              => (bool) $config->volt->stat,
            )
        );
        
        $view->registerEngines(array(
        ".phtml" => 'Phalcon\Mvc\View\Engine\Volt'
        ));

        $view->setPartialsDir($config->app->partials);

        return $view;
    });

    //Setup a base URI so that all generated URIs include the "tutorial" folder
    $di->set('url', function() use($config, $di){
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri($config->app->base);
        return $url;
    });

    //Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}