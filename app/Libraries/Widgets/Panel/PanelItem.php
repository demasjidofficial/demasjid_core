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

/**
 * Represents an individual widget stats.
 *
 * @property string $bgColor
 * @property string $faIcon
 * @property string $title
 * @property string $url
 * @property string $value
 */
class PanelItem
{
    protected $content;
    protected $itemClass;
    public function __construct(?array $data = null)
    {
        if (! is_array($data)) {
            return;
        }

        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }

    public function __get(string $key)
    {
        if (method_exists($this, $key)) {
            return $this->{$key}();
        }
    }

    /**
     * Get the value of content
     */
    public function content()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of itemClass
     */
    public function itemClass()
    {
        return $this->itemClass;
    }

    /**
     * Set the value of itemClass
     *
     * @return  self
     */
    public function setItemClass($itemClass)
    {
        $this->itemClass = $itemClass;

        return $this;
    }
}
