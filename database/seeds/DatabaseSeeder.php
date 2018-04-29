<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datetime = new \DateTime();
        DB::table("school")->insert([
            "name" => "阳光幼儿园",
            "content" => "阳光幼儿园秉承因材施教的理念，用专业化、国际化的视野全方位打造智商、情商、创造力与社交能力突出的未来儿童，尽最大的能力开发每个儿童的潜能。",
            "mobile" => "15542607336",
            "wechat" => "bestsuperman",
            "address" => "大连市甘井子区凌水街道123号",
            "open_time" => "09:30",
            "close_time" => "17:00"
        ]);
        DB::table("teachers")->insert([
            "name" => "李静",
            "content" => "最受孩子喜爱，年度最佳教师",
            "img" => "/img/tc_1.png",
            "word" => "教育是事业，事业的意义在于献身...",
            "class_id" => 2,
            "best" => 1
        ]);
        DB::table("teachers")->insert([
            "name" => "Linda",
            "content" => "最受孩子喜爱，年度最佳教师",
            "img" => "/img/tc_2.png",
            "word" => "教育是事业，事业的意义在于献身...",
            "class_id" => 1,
            "best" => 1
        ]);
        DB::table("classes")->insert([
            "name" => "大一班",
        ]);
        DB::table("classes")->insert([
            "name" => "大二班",
        ]);
        DB::table("classes")->insert([
            "name" => "大三班",
        ]);
        DB::table("classes")->insert([
            "name" => "中一班",
        ]);
        DB::table("classes")->insert([
            "name" => "中二班",
        ]);
        DB::table("classes")->insert([
            "name" => "中三班",
        ]);
        DB::table("classes")->insert([
            "name" => "小一班",
        ]);
        DB::table("classes")->insert([
            "name" => "小二班",
        ]);
        DB::table("classes")->insert([
            "name" => "小三班",
        ]);
        DB::table("specials")->insert([
            "name" => "围棋",
            "img" => "",
            "content" => "围棋"
        ]);
        DB::table("specials")->insert([
            "name" => "机器人",
            "img" => "",
            "content" => "机器人"
        ]);
        DB::table("specials")->insert([
            "name" => "软陶",
            "img" => "",
            "content" => "软陶"
        ]);
        DB::table("specials")->insert([
            "name" => "美术",
            "img" => "",
            "content" => "美术"
        ]);
        DB::table("specials")->insert([
            "name" => "舞蹈",
            "img" => "",
            "content" => "舞蹈"
        ]);
        DB::table("activities")->insert([
            "title" => "关于幼儿园预防以及应对春季高发传染病的预防",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "手足口病的措施",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "合理度过宝宝的入园焦虑期",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "夏季幼儿预防中暑",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "培养孩子的记忆力",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "夏天饮食注意",
            "content" => ""
        ]);
        DB::table("activities")->insert([
            "title" => "合理度过宝宝的入园焦虑期",
            "content" => ""
        ]);
        DB::table("news")->insert([
            "title" => "家长必读",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "新春贺词",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "2017届毕业生家长代表高岳峰小朋友的爸爸讲话",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "演出后《种太阳》剧组与陈强叔叔合影",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "幼儿舞蹈《老师亲妈妈亲》剧照",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "阳光幼儿园幼儿舞蹈《老师亲，妈妈亲》剧组与小叶阿姨合影",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("news")->insert([
            "title" => "金奖银奖不如家长们的夸奖，金杯银杯不如家长们的口碑。",
            "content" => "",
            "banner" => ""
        ]);
        DB::table("family")->insert([
            "title" => "如何教孩子画画",
            "content" => "画画是一种在二维的平面上以手工方式临摹自然的艺术，在中世纪的欧洲，人们常把绘画称作“猴子的艺术”。在20世纪以前，绘画模仿得越真实技术越高超，但是进入20世纪后，随着摄影技术的出现和发展，绘画开始转向表现画家主观自我的方向。",
            "banner" => "/img/ket`1.jpg"
        ]);
        DB::table("family")->insert([
            "title" => "如何与孩子探讨问题",
            "content" => "教育，教育者有目的有计划有组织的对受教育者的心智发展进行教化培育，以现有的经验、学识推敲于人，为其解释各种现象、问题或行为，以增长能力经验，其根本是以人的一种相对成熟或理性的思维来认知对待，让事物得以接近其最根本的存在，人在其中。",
            "banner" => "/img/jy.jpg"
        ]);
        DB::table("foods")->insert([
            "content" => "皮蛋瘦肉粥",
            "img" => "/img/pdsr.webp",
            "dateType" => 1,
            "foodType" => 1,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "花生",
            "img" => "/img/schs.webp",
            "dateType" => 1,
            "foodType" => 2,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "果脯",
            "img" => "/img/jsgf.webp",
            "dateType" => 1,
            "foodType" => 3,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "皮蛋瘦肉粥",
            "img" => "/img/pdsr.webp",
            "dateType" => 2,
            "foodType" => 1,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "花生",
            "img" => "/img/schs.webp",
            "dateType" => 2,
            "foodType" => 2,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "果脯",
            "img" => "/img/jsgf.webp",
            "dateType" => 2,
            "foodType" => 3,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "皮蛋瘦肉粥",
            "img" => "/img/pdsr.webp",
            "dateType" => 3,
            "foodType" => 1,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "花生",
            "img" => "/img/schs.webp",
            "dateType" => 3,
            "foodType" => 2,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("foods")->insert([
            "content" => "果脯",
            "img" => "/img/jsgf.webp",
            "dateType" => 3,
            "foodType" => 3,
            "date" => $datetime->format('Y-m-d')
        ]);

        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成今天1-3单元的课文练字3张，并留存完成照片",
            "class_id" => 1,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成今天1-3单元的课文练字3张，并留存完成照片",
            "class_id" => 2,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成今天1-3单元的课文练字3张，并留存完成照片",
            "class_id" => 3,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成400米跑步，并留存完成照片",
            "class_id" => 4,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成400米跑步，并留存完成照片",
            "class_id" => 5,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成400米跑步，并留存完成照片",
            "class_id" => 6,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成橡皮泥制作小创意，并留存完成照片",
            "class_id" => 7,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成橡皮泥制作小创意，并留存完成照片",
            "class_id" => 8,
            "date" => $datetime->format('Y-m-d')
        ]);
        DB::table("homeworks")->insert([
            "content" => "家长陪伴孩子完成橡皮泥制作小创意，并留存完成照片",
            "class_id" => 9,
            "date" => $datetime->format('Y-m-d')
        ]);
    }
}
