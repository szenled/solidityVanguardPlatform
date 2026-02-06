<?php
/**
 * Tests for solidityVanguard
 */

use PHPUnit\Framework\TestCase;
use Solidityvanguard\Solidityvanguard;

class SolidityvanguardTest extends TestCase {
    private Solidityvanguard $instance;

    protected function setUp(): void {
        $this->instance = new Solidityvanguard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityvanguard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
