<?php

/**
 * This file is part of the "-[:NEOXYGEN]->" NeoClient package
 *
 * (c) Neoxygen.io <http://neoxygen.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Neoxygen\NeoClient\Command;

use Neoxygen\NeoClient\Request\Request;

class SimpleCommand extends AbstractCommand
{
    public function execute()
    {
        $request = new Request('GET', $this->getUrl());

        print_r($this->httpClient->sendRequest($request));
        exit();
    }

    private function getUrl()
    {
        return $this->connection->getBaseUrl() . '/';
    }
}