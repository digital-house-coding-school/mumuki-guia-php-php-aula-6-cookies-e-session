public function testSession1(): void {
  global $sessionStart;
  global $_SESSION;
  
  $_SESSION = [];
  $_SESSION["usuarioLogado"] = "jonsnow";
  
  $resul = lerSessao();
  
  $this->assertTrue($sessionStart, "Não esqueça da função session_start?!");
  
  $this->assertTrue(is_string($resul), "A função deveria retornar uma string!");
  
  $this->assertTrue($resul === "jonsnow", "A função não retorna o valor esperado, verifique se você está puxando os valores da $_SESSION!");
}
