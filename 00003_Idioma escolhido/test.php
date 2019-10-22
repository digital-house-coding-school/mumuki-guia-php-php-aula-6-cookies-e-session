public function testResultado(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $_GET = [
    "idioma" => "es"
  ];
  
  $testName = "idioma";
  $testValue = "es";
  $testExpires = time() + 60 * 60 * 24 * 7;
  
  guardarCookie();
  
  $this->assertTrue(is_bool($resultado), "Tem certeza que você usou a função setcookie");
  
  $this->assertTrue($resultado, "A função não tem o retorno esperado!");
}

public function testResultado2(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $_GET = [
    "idioma" => "en"
  ];
  
  $testName = "idioma";
  $testValue = "en";
  $testExpires = time() + 60 * 60 * 24 * 7;
  
  guardarCookie();
  
  $this->assertTrue(is_bool($resultado), "Tem certeza que você usou a função setcookie");
  
  $this->assertTrue($resultado, "A função não tem o retorno esperado! Chegou a usar $_GET?");
}