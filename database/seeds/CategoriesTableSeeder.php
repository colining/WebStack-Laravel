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
                'id' => 31,
                'parent_id' => 0,
                'order' => 1,
                'title' => '壁纸',
                'icon' => 'fa-area-chart',
                'created_at' => '2019-11-12 13:36:25',
                'updated_at' => '2019-11-12 13:36:32',
            ),
            1 => 
            array (
                'id' => 32,
                'parent_id' => 0,
                'order' => 36,
                'title' => '备份',
                'icon' => 'fa-star-o',
                'created_at' => '2019-11-13 14:29:58',
                'updated_at' => '2019-12-01 15:40:46',
            ),
            2 => 
            array (
                'id' => 33,
                'parent_id' => 0,
                'order' => 2,
                'title' => '新世界',
                'icon' => 'fa-adjust',
                'created_at' => '2019-11-16 10:26:45',
                'updated_at' => '2019-11-30 15:48:33',
            ),
            3 => 
            array (
                'id' => 34,
                'parent_id' => 0,
                'order' => 3,
                'title' => '实用工具',
                'icon' => 'fa-codepen',
                'created_at' => '2019-11-30 15:20:04',
                'updated_at' => '2019-11-30 15:49:12',
            ),
            4 => 
            array (
                'id' => 35,
                'parent_id' => 0,
                'order' => 4,
                'title' => '学习热爱者',
                'icon' => 'fa-anchor',
                'created_at' => '2019-11-30 15:35:26',
                'updated_at' => '2019-11-30 15:35:33',
            ),
            5 => 
            array (
                'id' => 36,
                'parent_id' => 0,
                'order' => 5,
                'title' => '游戏热爱者',
                'icon' => 'fa-bomb',
                'created_at' => '2019-12-01 15:40:35',
                'updated_at' => '2019-12-01 15:40:46',
            ),
            6 => 
            array (
                'id' => 37,
                'parent_id' => 0,
                'order' => 0,
                'title' => '庆余年',
                'icon' => 'fa-star-o',
                'created_at' => '2019-12-19 08:07:00',
                'updated_at' => '2019-12-19 08:07:00',
            ),
        ));
        
        
    }
}