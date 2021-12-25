<?php

use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
  /** @test */
  public function testValidationDataArrayWithNonValidData()
  {
    $dumy_data = array("nama" =>  "<script>alert('test')</script>", "alamat" =>  '<DIV STYLE="background-image: url( javascript:alert("test"))">',);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $data_expectation = array("nama" =>  "&lt;script&gt;alert('test')&lt;/script&gt;", "alamat" =>  "&lt;DIV STYLE=&quot;background-image: url( javascript:alert(&quot;test&quot;))&quot;&gt;",);
    $result_expectation = array($data_expectation, 2);

    $this->assertEquals($result_expectation, $result);
  }

  public function testValidationDataArrayWithValidData()
  {
    $dumy_data = array("nama" =>  "darmayasa", "alamat" =>  'Jalan hangtuah no 13 denpasar',);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $result_expectation = array($dumy_data, 0);

    $this->assertEquals($result_expectation, $result);
  }

  public function testValidationNoDataArrayWithNonValidData()
  {
    $dumy_data = '<script>alert("test")</script>';

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $result_expectation = '&lt;script&gt;alert(&quot;test&quot;)&lt;/script&gt;';
    $this->assertEquals([$result_expectation, 1], $result);
  }
  public function testValidationNoDataArrayWithValidData()
  {
    $dumy_data = 'try to input data dumy';

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $this->assertEquals(['try to input data dumy', 0], $result);
  }
}
