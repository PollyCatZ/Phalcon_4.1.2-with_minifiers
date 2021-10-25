<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Database\DataMapper\Query\Select;

use DatabaseTester;
use Phalcon\DataMapper\Query\QueryFactory;

class QuoteIdentifierCest
{
    /**
     * Database Tests Phalcon\DataMapper\Query\Select :: quoteIdentifier()
     *
     * @since  2020-01-20
     */
    public function dMQuerySelectQuoteIdentifier(DatabaseTester $I)
    {
        $I->wantToTest('DataMapper\Query\Select - quoteIdentifier()');

        $connection = $I->getDataMapperConnection();
        $factory    = new QueryFactory();
        $select     = $factory->newSelect($connection);

        $quotes   = $connection->getQuoteNames();
        $source   = 'some field';
        $expected = $quotes['prefix'] . $source . $quotes['suffix'];
        $actual   = $select->quoteIdentifier($source);
        $I->assertEquals($expected, $actual);
    }
}
