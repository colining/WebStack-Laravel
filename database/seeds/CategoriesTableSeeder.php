<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 3,
                'title' => '常用推荐',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 12:48:58',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 4,
                'title' => '社区资讯',
                'icon' => 'fa-bullhorn',
                'created_at' => '2019-01-21 12:50:17',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'order' => 5,
                'title' => '灵感采集',
                'icon' => 'fa-lightbulb-o',
                'created_at' => '2019-01-21 13:53:10',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 6,
                'title' => '发现产品',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:53:31',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 3,
                'order' => 7,
                'title' => '界面灵感',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:53:49',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 3,
                'order' => 8,
                'title' => '网页灵感',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:54:00',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'order' => 9,
                'title' => '素材资源',
                'icon' => 'fa-thumbs-o-up',
                'created_at' => '2019-01-21 13:54:42',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 7,
                'order' => 10,
                'title' => '图标素材',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:54:59',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 7,
                'order' => 11,
                'title' => 'LOGO设计',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:11',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 7,
                'order' => 12,
                'title' => '平面素材',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:25',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 7,
                'order' => 13,
                'title' => 'UI资源',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:31',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 7,
                'order' => 14,
                'title' => 'Sketch资源',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:00:51',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 7,
                'order' => 15,
                'title' => '字体资源',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:01:02',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 7,
                'order' => 16,
                'title' => 'Mockup',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:01:12',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 7,
                'order' => 17,
                'title' => '摄影图库',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:01:23',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 7,
                'order' => 18,
                'title' => 'PPT资源',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:01:33',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'order' => 19,
                'title' => '常用工具',
                'icon' => 'fa-cogs',
                'created_at' => '2019-01-22 01:02:04',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 17,
                'order' => 20,
                'title' => '图形创意',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:14',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 17,
                'order' => 21,
                'title' => '界面设计',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:24',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 17,
                'order' => 22,
                'title' => '交互动效',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:32',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 17,
                'order' => 23,
                'title' => '在线配色',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:40',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 17,
                'order' => 24,
                'title' => '在线工具',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:49',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 17,
                'order' => 25,
                'title' => 'Chrome插件',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:02:58',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 0,
                'order' => 26,
                'title' => '学习教程',
                'icon' => 'fa-pencil',
                'created_at' => '2019-01-22 01:03:17',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 24,
                'order' => 27,
                'title' => '设计规范',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:03:29',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 24,
                'order' => 28,
                'title' => '视频教程',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:03:36',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 24,
                'order' => 29,
                'title' => '设计文章',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:03:44',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 24,
                'order' => 30,
                'title' => '设计电台',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:03:52',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 24,
                'order' => 31,
                'title' => '交互设计',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-22 01:04:03',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 0,
                'order' => 32,
                'title' => 'UED团队',
                'icon' => 'fa-user',
                'created_at' => '2019-01-22 01:05:39',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 0,
                'order' => 1,
                'title' => '壁纸',
                'icon' => 'fa-area-chart',
                'created_at' => '2019-11-12 13:36:25',
                'updated_at' => '2019-11-12 13:36:32',
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 0,
                'order' => 33,
                'title' => '备份',
                'icon' => 'fa-star-o',
                'created_at' => '2019-11-13 14:29:58',
                'updated_at' => '2019-11-16 10:27:05',
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 0,
                'order' => 2,
                'title' => '新世界',
                'icon' => 'fa-simplybuilt',
                'created_at' => '2019-11-16 10:26:45',
                'updated_at' => '2019-11-16 10:27:05',
            ),
        ));
        
        
    }
}