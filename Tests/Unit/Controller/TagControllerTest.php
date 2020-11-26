<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/statictagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Tests\Unit\Controller;

use JWeiland\Statictagcloud\Domain\Model\Tag;
use Nimut\TestingFramework\TestCase\UnitTestCase;

/**
 * Test case for class Tx_Statictagcloud_Controller_TagController.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 *
 * @author Stefan froemken <sfroemken@jweiland.net>
 */
class TagControllerTest extends UnitTestCase
{
    /**
     * @var Tag
     */
    protected $fixture;

    public function setUp(): void
    {
        $this->fixture = new Tag();
    }

    public function tearDown(): void
    {
        unset($this->fixture);
    }

    /**
     * @test
     */
    public function dummyMethod(): void
    {
        self::markTestIncomplete();
    }
}
