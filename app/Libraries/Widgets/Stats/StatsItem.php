<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Libraries\Widgets\Stats;

use Bonfire\Libraries\Widgets\Interfaces\Item;
use Bonfire\Libraries\Widgets\Stats\StatsItem as StatsStatsItem;

/**
 * Represents an individual widget stats.
 *
 * @property string $bgColor
 * @property string $faIcon
 * @property string $title
 * @property string $url
 * @property string $value
 */
class StatsItem extends StatsStatsItem implements Item
{    
    protected $bgIcon;
    
    public function title(): ?string
    {
        return $this->title;
    }

    /**
     * Get the value of bgIcon
     */ 
    public function bgIcon(): ?string
    {
        return $this->bgIcon;
    }

    /**
     * Set the value of bgIcon
     *
     * @return  self
     */ 
    public function setBgIcon($bgIcon)
    {
        $this->bgIcon = $bgIcon;

        return $this;
    }
}
