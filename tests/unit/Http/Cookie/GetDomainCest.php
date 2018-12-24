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

namespace Phalcon\Test\Unit\Http\Cookie;

use UnitTester;

/**
 * Class GetDomainCest
 */
class GetDomainCest
{
    /**
     * Tests Phalcon\Http\Cookie :: getDomain()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function httpCookieGetDomain(UnitTester $I)
    {
        $I->wantToTest('Http\Cookie - getDomain()');
        $I->skipTest('Need implementation');
    }
}
