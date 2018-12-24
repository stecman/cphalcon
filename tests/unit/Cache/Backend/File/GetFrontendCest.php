<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Backend\File;

use UnitTester;

/**
 * Class GetFrontendCest
 */
class GetFrontendCest
{
    /**
     * Tests Phalcon\Cache\Backend\File :: getFrontend()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheBackendFileGetFrontend(UnitTester $I)
    {
        $I->wantToTest('Cache\Backend\File - getFrontend()');
        $I->skipTest('Need implementation');
    }
}
