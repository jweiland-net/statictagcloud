<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/statictagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Tests\Unit\Domain\Model;

use JWeiland\Statictagcloud\Domain\Model\Tag;
use Nimut\TestingFramework\TestCase\UnitTestCase;

/**
 * Test case for class Tx_Statictagcloud_Domain_Model_Tag.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @author Stefan froemken <sfroemken@jweiland.net>
 */
class TagTest extends UnitTestCase
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
    public function setTagForStringSetsTag(): void
    {
        $this->fixture->setTag('Conceived at T3CON10');

        self::assertSame(
            'Conceived at T3CON10',
            $this->fixture->getTag()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink(): void
    {
        $this->fixture->setLink('Conceived at T3CON10');

        self::assertSame(
            'Conceived at T3CON10',
            $this->fixture->getLink()
        );
    }

    /**
     * @test
     */
    public function getPriorityReturnsInitialValueForInteger(): void
    {
        self::assertSame(
            0,
            $this->fixture->getPriority()
        );
    }

    /**
     * @test
     */
    public function setPriorityForIntegerSetsPriority(): void
    {
        $this->fixture->setPriority(12);

        self::assertSame(
            12,
            $this->fixture->getPriority()
        );
    }
}
