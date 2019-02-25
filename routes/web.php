
<?php
use App\Events\UserWasBanned;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/banevent', function () {

    $user = new App\User;

    event(new UserWasBanned($user));
    return view('welcome');
});

Route::get('/abstract', function (){
    $factory = new App\DesignPatterns\AbstractFactory\HtmlFactory();
    $text = $factory->createText('probni html text');
    var_dump($text->getText());

    return view('welcome');
});

Route::get('/singleton', function (){
    \App\DesignPatterns\Singleton::incrementCounter();
    \App\DesignPatterns\Singleton::incrementCounter();
    \App\DesignPatterns\Singleton::incrementCounter();
//    var_dump(\App\DesignPatterns\Singleton::getCounter());

    $singleton = \App\DesignPatterns\Singleton::getInstance();
//    $singleton::$counter = 25;
    var_dump($singleton::$counter);
});

Route::get('/singleton-trait', function (){
    $singleton = \App\DesignPatterns\Singleton\RequestCounterSingleton::getInstance();
    $singleton->incCounter();
    $singleton->incCounter();
    $singleton->incCounter();
    var_dump($singleton->getCounter());
});

Route::get('/prototype', function (){
    $fooBook = new \App\DesignPatterns\Prototype\FooBookPrototype();
    var_dump($fooBook->getTitle());
});

Route::get('/proxy', function (){
//    $polisa = new \App\DesignPatterns\Structural\Proxy\Polisa(1, 'Vedran');
    $polisa = new \App\DesignPatterns\Structural\Proxy\SmartProxy(1, 'Vedran');
    $virtualProxy = new \App\DesignPatterns\Structural\Proxy\VirtualProxy($polisa);
//    var_dump($polisa->getPolisa(1));
//    $polisa->addPolisa(1, 'xx'); //zauzima postojeci element niza, smart proxy to ne dozvoljava

    $protectionProxy = new \App\DesignPatterns\Structural\Proxy\ProtectionProxy($polisa);

    $protectionProxy->novaPolisa(2, 'xx');

//    var_dump($virtualProxy->dajPolisu(1));
    var_dump($polisa->getAll());
});

Route::get('/mediator', function (){
   $client = new \App\DesignPatterns\Behavioral\Mediator\Subsystem\Client();
   $server = new \App\DesignPatterns\Behavioral\Mediator\Subsystem\Server();
   $database = new \App\DesignPatterns\Behavioral\Mediator\Subsystem\Database();

   new App\DesignPatterns\Behavioral\Mediator\Mediator($client,$server,$database);
   $client->request();
});

Route::get('/command', function (){
   $invoker = new \App\DesignPatterns\Behavioral\Command\Invoker();
   $receiver = new \App\DesignPatterns\Behavioral\Command\Receiver();
   $command = new \App\DesignPatterns\Behavioral\Command\HelloCommand($receiver);

   $invoker->setCommand($command);
   $invoker->run();
   echo $receiver->getOutput();
});

Route::get('/observer', function (){
    /* subject */
    $noty = new \App\DesignPatterns\Behavioral\Observer\Publisher('Notification publisher');
    /* observeri */
    $email = new \App\DesignPatterns\Behavioral\Observer\Observer('EmailObserver', 50);
    $slack = new \App\DesignPatterns\Behavioral\Observer\Observer('SlackObserver', 10);
    $dashboard = new \App\DesignPatterns\Behavioral\Observer\Observer('DashboardObserver', 30);

    $noty->attach($email);
    $noty->attach($slack);
    $noty->attach($dashboard);
    $noty->detach($email);

    $noty->setEvent("Server LNX109 is going down <br>");
});

Route::get('/strategy', 'TestController@strategy');

Route::get('/template', 'TemplateController@index');

Route::get('/state', 'TestController@state');
