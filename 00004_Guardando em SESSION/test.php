public function testSession(): void {
  global $sessionStart;
  global $_SESSION;
  
  guardarNaSessao();
  
  $this->assertTrue($sessionStart, "¿Llamaste a session_start?");
  
  $this->assertTrue(array_key_exists("usuarioLogado", $_SESSION), "Não existe 'usuarioLogado' na variavel $_SESSION");
  
  $this->assertTrue($_SESSION["usuarioLogado"] === "jonsnow", "A associação usuarioLogado não tem o valor esperado!");
}