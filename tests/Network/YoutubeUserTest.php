<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\Network;

use Caldera\SocialNetworkBundle\Network\YoutubeUser;
use PHPUnit\Framework\TestCase;

class YoutubeUserTest extends TestCase
{
    public function testName(): void
    {
        $this->assertEquals('YouTube-Konto', (new YoutubeUser())->getName());
    }

    public function testIdentifier(): void
    {
        $this->assertEquals('youtube_user', (new YoutubeUser())->getIdentifier());
    }

    public function testBackgroundcolor(): void
    {
        $this->assertEquals('rgb(255, 0, 0)', (new YoutubeUser())->getBackgroundColor());
    }

    public function testTextColor(): void
    {
        $this->assertEquals('white', (new YoutubeUser())->getTextColor());
    }

    public function testIcon(): void
    {
        $this->assertEquals('fa-youtube', (new YoutubeUser())->getIcon());
    }

    public function testDetectorPriority(): void
    {
        $this->assertEquals(0, (new YoutubeUser())->getDetectorPriority());
    }
}
