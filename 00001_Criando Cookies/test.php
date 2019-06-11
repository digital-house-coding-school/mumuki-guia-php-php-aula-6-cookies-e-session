public function testResultado(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $testName = "idioma";
  $testValue = "PT-BR";
  $testExpires = 0;
  
  guardarCookie();
  
  $this->assertTrue(is_bool($resultado), "Llamaste a la función setcookie?");
  
  $this->assertTrue($resultado, "La función no hace lo esperado");
}