<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\Tumblr;
use PHPUnit\Framework\TestCase;

class TumblrTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('Tumblr', (new Tumblr())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('tumblr', (new Tumblr())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(0, 0, 0)', (new Tumblr())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new Tumblr())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-tumblr', (new Tumblr())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new Tumblr())->getDetectorPriority());
    }
}