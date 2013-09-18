<?php

class WpHasherTest extends TestCase {
  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testBasicExample() {
    $this->itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $this->random_state = microtime() . uniqid(rand(), true);
    $this->iteration_count_log2 = 8;

    $hashedPw = $this->hash('jfkdls75');
    $this->assertTrue($this->checkhash('jfkdls75', '$P$BpOlt6qv8kHwuHffzE5K79e/.03gB80'));

    $pw = 'isawthiscoming';
    $hashedPw = $this->hash('isawthiscoming');
    $this->assertTrue($this->checkhash($pw, $hashedPw));
  }