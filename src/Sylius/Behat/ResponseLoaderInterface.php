<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Behat;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
interface ResponseLoaderInterface
{
    /**
     * @param string $source
     *
     * @return
     */
    public function getMockedResponse($source);

    /**
     * @param string $source
     *
     * @return
     */
    public function getExpectedResponse($source);
}
