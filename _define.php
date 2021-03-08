<?php
/**
 * @brief CTA, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Noé Cendrier
 *
 * @copyright Noé Cendrier noe@noecendrier.fr
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "Call to action (CTA)",                       // Name
    "Easily insert buttons in your blog entries", // Description
    "Noé Cendrier",                               // Author
    '0.1',                                        // Version
    [
        'requires'    => [['core', '2.16']],
        'permissions' => 'usage,contentadmin',
        'type'        => 'plugin',
        'priority'    => 1001,                                        // Must be higher than dcLegacyEditor priority (ie 1000)
        'support'     => 'https://github.com/Lomalarch/cta'//, // Support URL
        // 'details'     => 'https://noecendrier.fr', // Details
/*        'settings'    => [                                            // Settings
            'self' => '',
            'blog' => '#params.????????',
            'pref' => '#user-options.????????'
        ]*/
    ]
);

