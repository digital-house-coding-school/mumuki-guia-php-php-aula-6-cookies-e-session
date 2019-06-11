public function testResultado(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $testName = "idioma";
  $testValue = "";
  $testExpires = -1;
  
  eliminarCookie();
  
  $this->assertTrue(is_bool($resultado), "Tem certeza que usou a função setcookie");
  
  $this->assertTrue($resultado, "A função não tem o retorno esperado!");
}