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

namespace Phalcon\Test\Integration\Validation\Validator\Date;

use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\ValidationTrait;
use Phalcon\Validation\Validator\Date;

/**
 * Class GetOptionCest
 */
class GetOptionCest
{
    use ValidationTrait;

    /**
     * Tests Phalcon\Validation\Validator\Date :: getOption()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function validationValidatorDateGetOption(IntegrationTester $I)
    {
        $I->wantToTest('Validation\Validator\Date - getOption()');

        $validator = new Date();

        $this->checkGetOption($I, $validator);
    }
}
