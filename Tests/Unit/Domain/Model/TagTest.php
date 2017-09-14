<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Stefan froemken <sfroemken@jweiland.net>, jweiland.net
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Statictagcloud_Domain_Model_Tag.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Static Tagcloud
 *
 * @author Stefan froemken <sfroemken@jweiland.net>
 */
class Tx_Statictagcloud_Domain_Model_TagTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Statictagcloud_Domain_Model_Tag
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Statictagcloud_Domain_Model_Tag();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTagReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTagForStringSetsTag() { 
		$this->fixture->setTag('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTag()
		);
	}
	
	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() { 
		$this->fixture->setLink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLink()
		);
	}
	
	/**
	 * @test
	 */
	public function getPriorityReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPriority()
		);
	}

	/**
	 * @test
	 */
	public function setPriorityForIntegerSetsPriority() { 
		$this->fixture->setPriority(12);

		$this->assertSame(
			12,
			$this->fixture->getPriority()
		);
	}
	
}
?>