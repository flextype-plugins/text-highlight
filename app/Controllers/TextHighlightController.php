<?php

namespace Flextype;

class TextHighlightController extends Controller {
    public function textHighlight(string $string, string $class = '', string $background = '#ddff99', string $color = '#000000') : string
    {
        return '<span class="text-highlight '.$class.'" style="background:'.$background.'; color:'.$color.'">'.$string.'</span>';
    }
}
