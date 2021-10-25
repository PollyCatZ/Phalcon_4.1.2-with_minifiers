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

namespace Phalcon\Test\Integration\Mvc\View\Engine\Php;

use IntegrationTester;

/**
 * Class RenderCest
 */
class RenderCest
{
    /**
     * Tests Phalcon\Mvc\View\Engine\Php :: render()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcViewEnginePhpRender(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View\Engine\Php - render()');
        $I->skipTest('Need implementation');
    }
}
