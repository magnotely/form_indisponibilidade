 <?php
//infoacessdb2.php
//informações sobre db(enredeço , usuário, senha, etc...);

define('ENDERECO', 'localhost');
define('DBname', 'indisponibilidade');
define('USUARIO','root');
define('SENHA','');

//exibição de erro[ não entendi muito bem ainda];

ini_set('display error', true);
error_reporting(E_ALL);

//posterior a isso, ai sim adiciono a função PDO
// obs: esse arquivo de informação pra inicio(infoacessdb.php), vai ser chamado no formulário, antes do doctyp html;
require_once 'pdo.php';
 ?>