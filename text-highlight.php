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

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [text-highlight]Text to highlight[/text-highlight]
    Entries::shortcode()->addHandler('text-highlight', function(ShortcodeInterface $s) {
        return textHighlight($s->getContent(),
                       ((null !== $s->getParameter('class')) ? $s->getParameter('class') : '' ),
                       ((null !== $s->getParameter('background')) ? $s->getParameter('background') : '#ddff99' ),
                       ((null !== $s->getParameter('color')) ? $s->getParameter('color') : '#000000' ));
    });
});


function textHighlight(string $string, string $class = '', string $background = '#ddff99', string $color = '#000000') : string
{
    return '<span class="text-highlight '.$class.'" style="background:'.$background.'; color:'.$color.'">'.$string.'</span>';
}
