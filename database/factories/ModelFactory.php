<?php
/**
 * User: ZhaQiu
 * Date: 2017/10/31
 * Time: 17:37
 * GitHub: https://github.com/viliy
 * Email: 34485431@qq.com
 */

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 10)),
        'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});