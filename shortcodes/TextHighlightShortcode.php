<?php


namespace Flextype;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [text-highlight]Text to highlight[/text-highlight]
$flextype['shortcodes']->addHandler('text-highlight', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->TextHighlightController->textHighlight($s->getContent(),
                   ((null !== $s->getParameter('class')) ? $s->getParameter('class') : '' ),
                   ((null !== $s->getParameter('background')) ? $s->getParameter('background') : '#ddff99' ),
                   ((null !== $s->getParameter('color')) ? $s->getParameter('color') : '#000000' ));
});
