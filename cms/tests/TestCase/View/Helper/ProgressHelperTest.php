<?php

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\ProgressHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

class ProgressHelperTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $View = new View();
        $this->Progress = new ProgressHelper($View);

    }

    public function testBar(): void
    {
        $result = $this->Progress->bar(90);
        $this->assertStringContainsString('width: 90%', $result);
        $this->assertStringContainsString('progress-bar', $result);

        $result = $this->Progress->bar(33.3333333);
        $this->assertStringContainsString('width: 33%', $result);

    }
}
