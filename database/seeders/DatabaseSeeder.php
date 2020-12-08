<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
            $page1 = [
                "морванюки1.jpg",
                "морванюки2.jpg",
                "морванюки3.jpg",
                "морванюки4.jpg",
                "морванюки5.jpg",
                "морванюки6.jpg",
            ];

            $page2 = [
                "ny3.jpg",
                "ny4.jpg",
                "ny5.jpg",
                "ng1.jpg",
                "ng2.jpg",
                "ng3.jpg",
            ];

            $page3 = [
                "nadia3.jpg",
                "nadia6.jpg",
                "nastia2.jpg",
                "nastia4.jpg",
                "rita3.jpg",
                "rita1.jpg",
            ];

            $allPages = [
                $page1,
                $page2,
                $page3
            ];

            for ($i = 0; $i < count($allPages); $i++) {
                DB::table("gallery_page")->insert([
                    "enabled" => true
                ]);

                foreach ($allPages[$i] as $photo) {
                    DB::table("gallery_photo")->insert([
                        "gallery_page_id" => $i + 1,
                        "image_url" => "storage/upload/" . $photo
                    ]);
                }
            }
        }

        {

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Консультация по стилям",
                "content" => "Если вы давно мечтали обуть кеды с классическими брюками, а грубые ботинки
             - с изящным платьем, но не знали, как это сделать стильно, обратите внимание на эту консультацию",
                "cost" => 1000,
                "duration" => "1,5 часа",
                "image_url" => "storage/upload/styles.jpg"
            ]);

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Консультация по цвету",
                "content" => "На этом месте я не буду мучать вас \"зимами\" и \"веснами\".
            Мы пойдем другим путем: определим ваш спектр цветов и научимся сочетать их с
             любым другим цветом, который существует в природе",
                "cost" => 800,
                "duration" => "1,5 часа",
                "image_url" => "storage/upload/colortypes.jpg"
            ]);

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Консультация по фигуре и пропорциям",
                "content" => "\"Я вообще не понимаю, что мне надеть, кроме джинсов! Купила эти
            брюки, а они на меня не сели, а на Оле же сидят! У нас один размер.
             И вообще я хочу носить юбки, но умею только джинсы\".",
                "cost" => 1000,
                "duration" => "1,5 часа",
                "image_url" => "storage/upload/bodytype.jpg"
            ]);

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Консультация с определением типажа по Ларсон",
                "content" => "Если однажды вы поняли, что вам не подходят
            кружевные блузы и женственные платья, но так и не поняли,
            что же вам идет. А женщина должна быть элегантной и вот это все, обращайтесь :)",
                "cost" => 1500,
                "duration" => "2 часа",
                "image_url" => "storage/upload/larson.jpg"
            ]);

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Пора поменять прическу",
                "content" => "Если вы снова стоите перед тяжелым выбором: стать
            блондинкой или постричь челку, а ваш парикмахер разводит руками
            и предлагает каре, напишите мне. Я наглядно покажу вам,
            какая стрижка и цвет волос будет вам к лицу",
                "cost" => 800,
                "duration" => "1 час",
                "image_url" => "storage/upload/hair.jpg"
            ]);

            DB::table("consultation")->insert([
                "enabled" => true,
                "title" => "Консультация по аксессуарам",
                "content" => "\"Все подруги носят эту бижутерию,
            а я не умею. Искала хорошую оправу для очков, а нашла вот это.
            Как вы носите эти ремни? А сумка должна подходить в цвет обуви?\"
            Это и многое другое по теме аксессуаров прояснится здесь",
                "cost" => 800,
                "duration" => "1,5 часа",
                "image_url" => "storage/upload/accsesoires.jpg"
            ]);
        }

        {
            $reviewUrls = [
                "storage/upload/s1.png",
                "storage/upload/s3.png",
                "storage/upload/s4.png",
                "storage/upload/s5.png",
                "storage/upload/s2.png"
            ];

            foreach ($reviewUrls as $reviewUrl)
            {
                DB::table("review")->insert([
                    "enabled" => true,
                    "image_url" => $reviewUrl
                ]);
            }
        }

        {
            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Разбор гардероба",
                "content" => "<p>Offline/online</p>
            <p>Составляем максимальное количество комплектов из ваших вещей.</p>
            <p>Составляем список покупок с визуализацией.</p>
            <p>Стоимость разбора гардероба до 4-х часов - 1200 грн.</p>
            <p>Каждый последующий час - 250 грн.</p>
            <p>Стоимость разбора гардероба online - 1200грн (до 50 вещей на фото).",
            ]);

            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Шопинг",
                "content" => "<p>Offline/online</p>
            <p>Составляем список необходимых покупок.</p>
            <p>Вещи, согласно списку, я ищу предварительно. Вам необходимо просто прийти на примерку</p>
            <p>Стоимость совместного шопинга до 4-х часов - 1200 грн.</p>
            <p>Каждый последующий час - 250 грн.</p>
            <p>Стоимость шопинга он-лайн - 1200 грн.</p>",
            ]);

            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Индивидуальные консультации",
                "content" => "<p>Offline/Online</p>
            <p>Консультация по стилевым решениям в гардеробе - 1000 грн.</p>
            <p>Консультация по определению цветотипа и цветовым сочетаниям - 800 грн.</p>
            <p>Консультация по теме аксессуаров - 800 грн.</p>
            <p>Консультация с определением типажа по Ларсон - 1500 грн.</p>
            <p><a class=\"inf\" href=\"#lessons\">Смотреть весь список консультаций</a></p>",
            ]);

            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Обучающий курс",
                "content" => "<p> Offline/Online</p>
            <p>6 занятий по 1,5 часа.</p>
            <p>Список занятий:</p>
            <p>1. Одежда, как инструмент коммуникаций. Стили в гардеробе.
              2. Сочетание стилей.
              3. Сочетание цветов.
              4. Фактуры, линии, баланс объёма в образе. Пропорции.
              5. Украшения и аксессуары.
              6. Ваш типаж по системе Ларсон. Особенности и рекомендации.
            </p>
            <p>Стоимость обучения - 2500 грн.</p>
            <p>Подробнее о курсе <a href=\"\"></a></p>",
            ]);

            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Стилизация фотосессий",
                "content" => "<p>Подбираем образ, согласно вашим пожеланиям и локации съемки.</p>
            <p>Стоимость подбора одного образа - 300грн.</p>
            <p>Образы для пары - 500грн.</p>
            <p>Образы для семейной сьемки (до 4-х человек) - 800 грн.</p>
            <p> <a class=\"inf\" href=\"#photos\">Посмотреть портфолио</a></p>",
            ]);

            DB::table("service")->insert([
                "enabled" => true,
                "title" => "Прокат платьев",
                "content" => "<p>Вечерние платья на прокат</p>
            <p><a class=\"inf\" href=\"#rental\">Смотреть все платья</a></p>",
            ]);
        }
    }
}
