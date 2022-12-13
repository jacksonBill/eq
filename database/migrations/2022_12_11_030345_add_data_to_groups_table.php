<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            DB::table('groups')->insert([
                ['id_parent'=> 0, 'name'=>'Электроника'],
                ['id_parent'=> 0, 'name'=>'Одежда'],
                ['id_parent'=> 0, 'name'=>'Бытовая техника'],
                ['id_parent'=> 1, 'name'=>'Телефоны и смарт-часы'],
                ['id_parent'=> 1, 'name'=>'Компьютеры и комплектующие'],
                ['id_parent'=> 2, 'name'=>'Женщинам'],
                ['id_parent'=>2,'name'=>'Мужчинам'],
                ['id_parent'=>3,'name'=>'Крупная бытовая техника'],
                ['id_parent'=>3,'name'=>'Встраиваемая бытовая техника'],
                ['id_parent'=>4,'name'=>'Смартфоны'],
                ['id_parent'=>4,'name'=>'Смарт-часы и фитнес-браслеты'],
                ['id_parent'=>5,'name'=>'Комплектующие для ПК'],
                ['id_parent'=>5,'name'=>'Моноблоки'],
                ['id_parent'=>5,'name'=>'Системные блоки'],
                ['id_parent'=>6,'name'=>'Блузы и рубашки'],
                ['id_parent'=>7,'name'=>'Брюки'],
                ['id_parent'=>7,'name'=>'Верхняя одежда'],
                ['id_parent'=>9,'name'=>'Холодильники'],
                ['id_parent'=>9,'name'=>'Морозильные камеры'],
                ['id_parent'=>10,'name'=>'Стиральные машины'],
                ['id_parent'=>10,'name'=>'Сушильные машины'],
                ['id_parent'=>10,'name'=>'Посудомойки'],
                ['id_parent'=>12,'name'=>'Смарт-часы'],
                ['id_parent'=>12,'name'=>'Фитнес-браслеты'],
                ['id_parent'=>12,'name'=>'Браслеты и кольца бесконтактной оплаты'],
                ['id_parent'=>13,'name'=>'Жесткие диски, SSD и сетевые накопители'],
                ['id_parent'=> 13,'name'=>'Видеокарты и графические ускорители'],
                ['id_parent'=> 13,'name'=>'Оперативная память'],
                ['id_parent'=> 13,'name'=>'Материнские платы'],
                ['id_parent'=> 13,'name'=>'Процессоры'],
                ['id_parent'=> 16,'name'=>'Блузы'],
                ['id_parent'=> 16,'name'=>'Рубашки']
            ]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            DB::table('groups')->truncate();
        });
    }
};
