<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(0);

if ($pager->hasPrevious()) {
    echo '<link rel="prev" href="' . $pager->getPrevious() . '">' . PHP_EOL;
}

echo '<link rel="canonical" href="' . $pager->getCurrent() . '"> TES' . PHP_EOL;

if ($pager->hasNext()) {
    echo '<link rel="next" href="' . $pager->getNext() . '">' . PHP_EOL;
}
