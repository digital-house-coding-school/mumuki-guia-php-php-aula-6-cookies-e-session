namespace interno;

$sessionStart = false;
$_SESSION = null;

function session_start() {
  global $sessionStart; 
  
  $sessionStart = true;
}