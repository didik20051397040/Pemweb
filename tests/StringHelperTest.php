<?php

use PHPUnit\Framework\TestCase;
use didik20051397040\pemweb1\StringHelper;

final class StringHelperTest extends TestCase
{

    public function testExcerpt()
    {
        $text = "lorem ipsum dolor sit amet";

        $result = StringHelper::excerpt($text, 3, "..");
        $expected = "lorem ipsum dolor..";

        $this->assertEquals($expected, $result);
    }

}