<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Wordcount.php";

// Class untuk run Testing.
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        // Kita pakai class yang mau kita test.
        $Wc = new WordCount();

        // Kita masukan parameter 5 kata, yang harusnya dapat output 5.
        $TestSentence = "My name is Mikasa Ackerman"; // 5 Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        // Kita assert equal, ekspektasi nya harus 5, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals(5, $WordCount); 
    }
}