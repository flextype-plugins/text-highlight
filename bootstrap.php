<?php

/**
 *
 * Flextype Text Highlight Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

include_once 'app/Controllers/TextHighlightController.php';
include_once 'shortcodes/TextHighlightShortcode.php';
include_once 'twig/TextHighlightTwigExtension.php';

$flextype['TextHighlightController'] = function ($container) {
     return new TextHighlightController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new TextHighlightTwigExtension($flextype));
