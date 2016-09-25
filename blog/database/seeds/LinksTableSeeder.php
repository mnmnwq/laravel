<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => '后端网',
                'link_title' => '剑侠世界',
                'link_url' => 'www.xisahnju.com',
                'link_order' => 1,
            ],
            [
                'link_name' => '后端网论坛',
                'link_title' => '剑侠世界论坛',
                'link_url' => 'www.bbs.com.cn',
                'link_order' => 2,
            ]
        ];
        DB::table('links')->insert($data);
    }
}
