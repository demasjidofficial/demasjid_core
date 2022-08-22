<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace App\Libraries\Widgets\Panel;

use Bonfire\Libraries\Widgets\BaseWidget;
use Bonfire\Libraries\Widgets\Interfaces\Widgets;

class Panel extends BaseWidget implements Widgets
{
    protected $title;
    public function createCollection(string $name): PanelCollection
    {
        $collection = new PanelCollection();
        $collection->setName($name);

        $this->items[] = $collection;

        return $collection;
    }

    /**
     * Locates a collection by name.
     *
     * @return mixed
     */
    public function collection(string $name)
    {
        foreach ($this->items as $item) {
            if ($item instanceof PanelCollection && $item->name() === $name) {
                return $item;
            }
        }
    }

    public function collect(string $name, array $items)
    {
        $collection = $this->collection($name);

        if ($collection === null) {
            $collection = new PanelCollection();
            $collection->setName($name)->setTitle(ucfirst($name));

            $this->items[] = $collection;
        }

        $collection->addItems($items);

        return $collection;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
