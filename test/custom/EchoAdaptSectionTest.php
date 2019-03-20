<?php

namespace oat\libCat\custom\Test;

use oat\libCat\custom\EchoAdaptEngine;
use oat\libCat\custom\EchoAdaptSection;

class EchoAdaptSectionTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    /**
     * @covers EchoAdaptSection::__construct
     */
    public function testConstruct()
    {
        $settings = json_encode('12345');
        $engine = new EchoAdaptEngine(null, null, new \GuzzleHttp\Client());
        $section = new EchoAdaptSection($engine, $settings);
        $this->assertInstanceOf('oat\\libCat\\custom\\EchoAdaptSection', $section);
        $this->assertEquals('12345', $section->getSectionId());
    }
}
