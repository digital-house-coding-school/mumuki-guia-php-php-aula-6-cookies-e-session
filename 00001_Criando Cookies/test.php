public function testResultado(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $testName = "idioma";
  $testValue = "PT-BR";
  $testExpires = 0;
  
  salvarCookie();
  
  $this->assertTrue(is_bool($resultado), "Tem certeza que usou a função setcookie? ");
  
  $this->assertTrue($resultado, "A função não retorna o resultado esperado!");
}