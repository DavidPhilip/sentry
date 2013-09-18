<?php

use Cartalyst\Sentry\Hashing\WpHasher as Hasher;

class WpHasherTest extends TestCase {
  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testWpHasher() {
    $hasher = new Hasher;

    $hashedPw = $hasher->hash('jfkdls75');
    $this->assertTrue($hasher->checkhash('jfkdls75', '$P$BpOlt6qv8kHwuHffzE5K79e/.03gB80'));

    $pw = 'isawthiscoming';
    $hashedPw = $hasher->hash('isawthiscoming');
    $this->assertTrue($hasher->checkhash($pw, $hashedPw));
  }
}