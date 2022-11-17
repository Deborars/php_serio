<?php

include_once("../../topo.html");
require_once __DIR__ . "/classes/App/Template.php";
require_once __DIR__ . "/classes/Web/Template.php";


/*App\Template App é o nome do namespace e o Template é o nome da classe
Usamos na frente do new o nome do namespace seguindo da classe como se estivessemos navegando
entre páginas
*/
$appTemplate = new App\Template();
$webTemplate = new Web\Template();

// var_dump([$webTemplate, $appTemplate]);

//*outra maneira de usar um objeto com o namespace do lado front*/
//Você está apenas criando um "apelido rápido" com o USE.
use App\Template;
use Web\Template as WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump($appUseTemplate, $webUseTemplate);

//*visibilidade*/ */

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

// $user->firstName = 'Debora';

$debora = $user->setUser('Debora', "testeteste.com");

if (!$debora) {
  echo "{$user->getError()}";
}