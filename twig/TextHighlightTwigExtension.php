<?php

/**
 * @package Flextype
 *
 * @author Sergey Romanenko <hello@romanenko.digital>
 * @link http://romanenko.digital
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

class TextHighlightTwigExtension extends \Twig_Extension
{
    /**
     * Flextype Dependency Container
     */
    private $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('textHighlight', [$this, 'textHighlight'], ['is_safe' => ['html']])
        ];
    }

    public function textHighlight(string $string, string $class = '', string $background = '#ddff99', string $color = '#000000')
    {
        return $this->flextype->TextHighlightController->textHighlight($string, $class, $background, $color);
    }
}
