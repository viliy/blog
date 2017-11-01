<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/31
 * Time: 17:28
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

class MarkdownerTest extends TestCase
{

    protected $markdown;

    public function setup()
    {
        $this->markdown = new \App\Services\Markdowner();
    }

    /**
     * @dataProvider conversionsProvider
     */
    public function testConversions($value, $expected)
    {
        $this->assertEquals($expected, $this->markdown->toHTML($value));
    }

    public function conversionsProvider()
    {
        return [
            ["test", "<p>test</p>\n"],
            ["# title", "<h1>title</h1>\n"],
            ["Here's Johnny!", "<p>Here&#8217;s Johnny!</p>\n"],
        ];
    }
}
