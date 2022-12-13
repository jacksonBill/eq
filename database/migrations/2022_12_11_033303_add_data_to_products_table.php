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
        Schema::table('products', function (Blueprint $table) {
            DB::table('products')->insert([
                ['id_group'=>11,'name'=>'Смартфон Apple iPhone 12 mini 128 ГБ'],
                ['id_group'=>11,'name'=>'Смартфон Xiaomi Redmi 9A 2/32 ГБ, серый'],
                ['id_group'=>11,'name'=>'Смартфон Xiaomi Redmi Note 11 4/128 ГБ, голубой'],
                ['id_group'=>11,'name'=>'Смартфон Xiaomi 12 Pro 12/256 ГБ, фиолетовый'],
                ['id_group'=>24,'name'=>'Умные часы Pro Smart Watch 7 / Смарт часы женские, мужские / Фитнес браслет, 44mm'],
                ['id_group'=>24,'name'=>'Умные часы Smart Watch 7 Series, 45mm, черный'],
                ['id_group'=>25,'name'=>'Фитнес-браслет Xiaomi Mi Band 7, черный'],
                ['id_group'=>26,'name'=>'Ремешок для часов фитнес браслета Huawei Watch Fit NEW Elegant , Хуавей вотч фит'],
                ['id_group'=>26,'name'=>'Умное кольцо UK2 с поддержкой NFC, размер 8, белое'],
                ['id_group'=>26,'name'=>'Смарт-кольцо R5 / Водонепроницаемое пылезащитное / Jakcom IC ID NFC Wear для IOS Android'],
                ['id_group'=>26,'name'=>'Jakcom Смарт-кольцо R4 / Водонепроницаемое пылезащитное / IC ID NFC Wear для IOS Android'],
                ['id_group'=>27,'name'=>'Кабель переходник USB 3.0 - SATA lll HDD / SSD адаптер для внешнего жесткого диска / SSD'],
                ['id_group'=>27,'name'=>'1 ТБ Внутренний SSD диск Western Digital Blue SN570 M.2 PCI-E 3.0 (WDS100T3B0C)'],
                ['id_group'=>27,'name'=>'120 ГБ Внутренний SSD диск AMD R5 Series 2.5\" SATA3 6.0 Гбит/с (R5SL120G)'],
                ['id_group'=>27,'name'=>'240 ГБ Внутренний SSD диск Exegate NextPro UV500TS240 (EX280465RUS)'],
                ['id_group'=>27,'name'=>'240 ГБ Внутренний SSD диск AMD SSD накопитель AMD R5 Series 240GB, R5SL240G (R5SL240G)'],
                ['id_group'=>28,'name'=>'Видеокарта Colorful GeForce RTX 3080 10 ГБ (3080-10GB-UTWOC)'],
                ['id_group'=>28,'name'=>'Устройство видеозахвата EasyCAP (HD)'],
                ['id_group'=>28,'name'=>'Конвертер PALMEXX HDMI to USB карта видеозахвата и стриминга'],
                ['id_group'=>29,'name'=>'Оперативная память Compit Модуль памяти 1x8 ГБ (CMPTDDR48GBD2400 )'],
                ['id_group'=>29,'name'=>'Оперативная память Micron DDR3 SO-DIMM 4Gb 1.5V 1600Mhz для ноутбука 1x4 ГБ (0)'],
                ['id_group'=>29,'name'=>'Оперативная память OEM Kingston SODIMM DDR3L 8Gb 1600 1.35V 1x8 ГБ (KVR16LS11/8)'],
                ['id_group'=>30,'name'=>'Материнская плата Gigabyte Z490M'],
                ['id_group'=>30,'name'=>'Материнская плата Gigabyte B560M DS3H V2'],
                ['id_group'=>30,'name'=>'Материнская плата Gigabyte H510M S2H V2'],
                ['id_group'=>30,'name'=>'Материнская плата Gigabyte B660M GAMING AC'],
                ['id_group'=>30,'name'=>'Материнская плата Gigabyte A320M S2H Ryzen AM4'],
                ['id_group'=>31,'name'=>'Процессор intel i5-12600KF'],
                ['id_group'=>31,'name'=>'Процессор AMD Ryzen 5 5600X OEM (без кулера)'],
                ['id_group'=>31,'name'=>'Процессор AMD Ryzen 7 7700X BOX (без кулера)'],
                ['id_group'=>31,'name'=>'Процессор intel i5-12600K'],
                ['id_group'=>31,'name'=>'Процессор, Серверный процессор XEON Xeon E5-2640v3 OEM (без кулера)'],
                ['id_group'=>31,'name'=>'Процессор Core i3-12100F OEM (CM8071504651013)'],
                ['id_group'=>31,'name'=>'Процессор AMD Threadripper 5975WX BOX (без кулера)'],
                ['id_group'=>32,'name'=>'Блузка Tom Tailor'],
                ['id_group'=>32,'name'=>'Блузка'],
                ['id_group'=>33,'name'=>'Рубашка ELIZA group'],
                ['id_group'=>33,'name'=>'Рубашка Boutique. Итальянская мода (журнал)'],
                ['id_group'=>33,'name'=>'Рубашка DOCTOR HOUSE'],
                ['id_group'=>17,'name'=>'Брюки EA7 Core Identity'],
                ['id_group'=>17,'name'=>'Брюки Dervirga`s'],
                ['id_group'=>17,'name'=>'Брюки утепленные CEVAT`S'],
                ['id_group'=>17,'name'=>'Брюки спортивные CEVAT`S Комфорт'],
                ['id_group'=>17,'name'=>'Брюки Soft home'],
                ['id_group'=>18,'name'=>'Пальто пуховое Nike'],
                ['id_group'=>18,'name'=>'Куртка Hanster'],
                ['id_group'=>18,'name'=>'Куртка DSGdong'],
                ['id_group'=>18,'name'=>'Пуховик EA7 Core Shield'],
                ['id_group'=>19,'name'=>'Морозильный ларь Haier HCE143R'],
                ['id_group'=>19,'name'=>'Холодильник Ascoli Холодильник двухкамерный с морозильником Ascoli ARDFRY250, с холодильной и морозильной камерой No Frost, кремовый, бежевый'],
                ['id_group'=>19,'name'=>'Холодильник БИРЮСА Б-90, однокамерный, белый'],
                ['id_group'=>19,'name'=>'Холодильник двухкамерный Hansa FK3356.2DFW, No frost, объем 341 литра, электронная панель управления, LED подсветка, сигнал открытой двери, автосохранение холода'],
                ['id_group'=>19,'name'=>'Холодильник БИРЮСА Б-120, двухкамерный , белый'],
                ['id_group'=>19,'name'=>'Холодильник Candy CCRN 6200W, белый'],
                ['id_group'=>19,'name'=>'Холодильник двухкамерный Zarget ZRB 310NS1WM, NO frost, класс энергопотребления А+, регулирующие полки из ударопрочного стекла, объем 302 литра'],
                ['id_group'=>19,'name'=>'Холодильник Comfee RCT124WH1R, двухкамерный, белый'],
                ['id_group'=>20,'name'=>'Морозильный ларь Willmark CF-170CS, 100 Вт, 165 л, 6.5 кг/сут, 42 дБ, суперзаморозка, белый'],
                ['id_group'=>20,'name'=>'Морозильная камера Hyundai CU1007, черный'],
                ['id_group'=>20,'name'=>'Морозилка БИРЮСА Б-240KX'],
                ['id_group'=>20,'name'=>'Морозильный ларь Willmark CF-250CS, 130 Вт, 225 л, 9.2 кг/сутки, 42 дБ, суперзаморозка, белый'],
                ['id_group'=>20,'name'=>'Морозильная камера Comfee RCU102WH1R, белый'],
                ['id_group'=>20,'name'=>'Морозильная камера САРАТОВ 153, белый'],
                ['id_group'=>20,'name'=>'Морозильный ларь Willmark CF-120CS, объем 105 л, класс A, 5 кг/сутки, быстрая заморозка, белый'],
                ['id_group'=>20,'name'=>'Морозилка БИРЮСА Б-285KX, белый'],
                ['id_group'=>20,'name'=>'Морозильный ларь Бирюса 355KX, белый'],
                ['id_group'=>21,'name'=>'Встраиваемая стиральная машина Weissgauff WMI 6128 D, белый'],
                ['id_group'=>21,'name'=>'Встраиваемая стиральная машина Indesit IWUD 4105 (CIS), белый'],
                ['id_group'=>21,'name'=>'Встраиваемая стиральная машина Indesit BI WMIL 71252'],
                ['id_group'=>22,'name'=>'Встраиваемая сушильная машина Haier HD90-A2959 белый, черный, серебристый'],
                ['id_group'=>22,'name'=>'Встраиваемая сушильная машина Miele T4859 CiL'],
                ['id_group'=>23,'name'=>'Посудомоечная машина встраиваемая Monsher MD 4503'],
                ['id_group'=>23,'name'=>'Встраиваемая посудомоечная машина Weissgauff BDW 4004, серый'],
                ['id_group'=>23,'name'=>'Встраиваемая посудомоечная машина Weissgauff BDW 6062 D'],
                ['id_group'=>23,'name'=>'Посудомоечная машина встраиваемая Kuppersberg GSM 4574'],
                ['id_group'=>23,'name'=>'Встраиваемая посудомоечная машина Weissgauff BDW 6042'],
                ['id_group'=>14,'name'=>'24\" Моноблок MonoX Shark (Intel Core i5-6500 (3.2 ГГц), RAM 8 ГБ, SSD 480, Windows 10 Pro), черный, черный матовый'],
                ['id_group'=>14,'name'=>'19.5\" Моноблок Alfa computers ALFA-19 (Intel Core i5-520M (2.4 ГГц), RAM 8 ГБ, SSD 512, Intel HD Graphics, Windows 10 Pro), черно-серый, Российская клавиатура'],
                ['id_group'=>14,'name'=>'23.8\" Моноблок YB36 (Intel Core i7-8550U (1.8 ГГц), RAM 8 ГБ, SSD 256, Intel UHD Graphics 620, Windows 10 Pro), белый, Российская клавиатура'],
                ['id_group'=>15,'name'=>'Системный блок Matrix (Intel Core i5-10400F (2.9 ГГц), RAM 16 ГБ, SSD 500 ГБ, NVIDIA GeForce RTX 3060 (12 Гб), Windows 10 Pro), черный'],
                ['id_group'=>15,'name'=>'Системный блок с монитором 24\" IPS + DVD привод полный комплект (Intel Core i5-2400 (3.4 ГГц), RAM 8 ГБ, SSD 480 ГБ, Intel HD Graphics, Windows 10 Pro), ALFA, черны'],
                ['id_group'=>15,'name'=>'Системный блок KING KOMP KK10004437 Intel Core i9-12900KF, GeForce RTX 4090, RAM 64GB, SSD 250GB + SSD 1TB (Intel Core i9-12900KF (3.9 ГГц), RAM 64 ГБ, SSD 2256 ГБ, NVIDIA GeForce RTX 4090 (24 Гб), Windows 10 Pro), черный'],
                ['id_group'=>15,'name'=>'Системный блок Matrix (AMD Ryzen 5 5600G (3.9 ГГц), SSD 500 ГБ, AMD Radeon Vega 7, Windows 10 Pro), черный'],
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
        Schema::table('products', function (Blueprint $table) {
            DB::table('products')->truncate();
        });
    }
};
