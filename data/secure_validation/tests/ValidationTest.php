<?php

use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
  /** @test */
  public function testValidationDataArrayWithKeyEmailAndTgl_lahir()
  {
    $dumy_data = array("email" =>  "darmayasa221@gmail.com", "tgl_lahir" =>  "2021-12-14",);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $result_expectation = array($dumy_data, 0);

    $this->assertEquals($result_expectation, $result);
  }

  public function testValidationDataArrayWithOneKeyRandomAndEmailOrTgl_lahir()
  {
    $dumy_data = array("nama" =>  "darmayasa", "email" =>  "darmayasa221@gmail.com",);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $result_expectation = array($dumy_data, 0); 

    $this->assertEquals($result_expectation, $result);
  }
  public function testValidationDataArrayWithKeyRandomNonValidValueAndValidValue()
  {
    $dumy_data = array("nama" =>  "<script>alert('test')</script>", "alamat" =>  "Jalan hangtuah no 13 denpasar",);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $data_expectation = array("nama" =>  "alerttestscript", "alamat" =>  "Jalan hangtuah no 13 denpasar",);
    $result_expectation = array($data_expectation, 1);

    $this->assertEquals($result_expectation, $result);
  }
  public function testValidationDataArrayWithKeyRandomAndNonValidValue()
  {
    $dumy_data = array("nama" =>  "<script>alert('test')</script>", "alamat" =>  '<DIV STYLE="background-image: url( javascript:alert("test"))">',);

    $class = new Validation();
    $result = $class->secureValidation($dumy_data);

    $data_expectation = array("nama" =>  "alerttestscript", "alamat" =>  "image javascript",);
    $result_expectation = array($data_expectation, 2);

    $this->assertEquals($result_expectation, $result);
  }

  public function testValidationDataArrayWithoutKeyEmailAndTgl_lahir()
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

    $result_expectation = 'alerttestscript';
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
