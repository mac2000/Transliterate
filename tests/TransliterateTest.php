<?php

use Mac\Transliterate;

class TransliterateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Transliterate
     */
    protected $transliterate;

    public function setUp()
    {
        $this->transliterate = new Transliterate();
    }

    /**
     * @dataProvider transliterate
     */
    public function testTransliteration($text, $result)
    {
        $this->assertEquals($result, $this->transliterate->transliterate($text));
    }

    /**
     * @dataProvider slugify
     */
    public function testSlufiy($text, $result)
    {
        $this->assertEquals($result, $this->transliterate->slugify($text));
    }

    public function testCustomRules()
    {
        $this->transliterate->rules['a'] = 'x';
        $this->assertEquals('xxx', $this->transliterate->transliterate('aaa'));
    }

    public function testSlugifyCustomSpace()
    {
        $this->assertEquals('hello_world', $this->transliterate->slugify('Hello World', '_'));
    }

    public function transliterate()
    {
        return array(
            array('Hello World', 'Hello World'),
            array('Привет Мир', 'Privet Mir')
        );
    }

    public function slugify()
    {
        return array(
            array('Hello World', 'hello-world'),
            array('Привет Мир', 'privet-mir')
        );
    }
}