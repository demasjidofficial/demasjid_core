<?php

namespace Config;

use Bonfire\Config\Alerts as ConfigAlerts;

class Alerts extends ConfigAlerts
{
    /**
     * Template to use for HTML output.
     */
    public string $template = 'App\Views\_alerts.php';

    /**
     * Mapping of Session keys to their CSS classes.
     * Note: Some templates may add prefixes to the class,
     * like Bootstrap "alert-{$class}".
     *
     * @var array<string,string>
     */
    public array $classes = [
        // Bootstrap classes
        'primary'   => 'primary',
        'secondary' => 'secondary',
        'success'   => 'success',
        'danger'    => 'danger',
        'warning'   => 'warning',
        'info'      => 'info',

        // Additional log levels
        'message'   => 'success',
        'notice'    => 'secondary',
        'error'     => 'danger',
        'critical'  => 'danger',
        'emergency' => 'danger',
        'alert'     => 'warning',
        'debug'     => 'info',

        // Common framework keys
        'messages' => 'primary',
        'errors'   => 'danger',
    ];
}
