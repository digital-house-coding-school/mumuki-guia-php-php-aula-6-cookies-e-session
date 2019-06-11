public function testResultado(): void {
  global $testName;
  global $testValue;
  global $testExpires;
  global $resultado;
  
  $_GET = [
    "idioma" => "ENG"
  ];
  
  $testName = "idioma";
  $testValue = "es";
  $testExpires = time() + 60 * 60 * 24 * 7;
  
  guardarCookie();
  
  $this->assertTrue(is_bool($resultado), "Llamaste a la función setcookie?");
  
  $this->assertTrue($resultado, "La función no hace lo esperado");
}

public function testCookie2(): void {
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
  
  $this->assertTrue(is_bool($resultado), "Llamaste a la función setcookie?");
  
  $this->assertTrue($resultado, 'La función no hace lo esperado. ¿Estas enviando el valor desde $_GET?');
}