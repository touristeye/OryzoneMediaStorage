<?php
namespace Oryzone\MediaStorage\Test\Model;

/*
 * This file is part of the Oryzone/MediaStorage package.
 *
 * (c) Luciano Mammino <lmammino@oryzone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Oryzone\MediaStorage\Model\SimpleMedia;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-07 at 04:26:10.
 */
class SimpleMediaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleMedia
     */
    protected $media;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->media = new SimpleMedia;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testSetGetId()
    {
        $this->media->setId('id');
        $this->assertEquals('id', $this->media->getId());
    }
}
