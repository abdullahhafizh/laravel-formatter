<?php

namespace Hafizh\Formatter\Test\Parsers;

use Hafizh\Formatter\Parsers\Parser;
use Hafizh\Formatter\Parsers\XmlParser;
use Hafizh\Formatter\Parsers\YamlParser;
use Hafizh\Formatter\Test\TestCase;

class YamlParserTest extends TestCase
{

    public function testYamlParserIsInstanceOfParserInterface()
    {
        $parser = new YamlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfYamlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser   = new XmlParser('<xml><foo>bar</foo></xml>');
        $x        = new YamlParser($parser->toYaml());
        $this->assertEquals($expected, $x->toArray());
    }

}
