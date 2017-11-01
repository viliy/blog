<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/31
 * Time: 17:30
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{

    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);

        return $this->postTransformText($text);
    }

    protected function preTransformText($text)
    {
        return $text;
    }

    protected function postTransformText($text)
    {
        return $text;
    }
}
