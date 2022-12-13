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
        Schema::table('prices', function (Blueprint $table) {
            DB::table('prices')->insert([
                ['id_product'=>1,'price'=>52490.00],
                ['id_product'=>2,'price'=>5755.00],
                ['id_product'=>3,'price'=>16480.00],
                ['id_product'=>4,'price'=>96990.00],
                ['id_product'=>5,'price'=>1896.00],
                ['id_product'=>6,'price'=>1843.00],
                ['id_product'=>7,'price'=>2356.00],
                ['id_product'=>8,'price'=>259.00],
                ['id_product'=>9,'price'=>308.00],
                ['id_product'=>10,'price'=>3108.00],
                ['id_product'=>11,'price'=>1616.00],
                ['id_product'=>12,'price'=>1019.00],
                ['id_product'=>13,'price'=>12739.00],
                ['id_product'=>14,'price'=>960.00],
                ['id_product'=>15,'price'=>1530.00],
                ['id_product'=>16,'price'=>1542.00],
                ['id_product'=>17,'price'=>61969.00],
                ['id_product'=>18,'price'=>671.00],
                ['id_product'=>19,'price'=>941.00],
                ['id_product'=>20,'price'=>1294.00],
                ['id_product'=>21,'price'=>1409.00],
                ['id_product'=>22,'price'=>1645.00],
                ['id_product'=>23,'price'=>11809.00],
                ['id_product'=>24,'price'=>6373.00],
                ['id_product'=>25,'price'=>5010.00],
                ['id_product'=>26,'price'=>15539.00],
                ['id_product'=>27,'price'=>3671.00],
                ['id_product'=>28,'price'=>21150.00],
                ['id_product'=>29,'price'=>12804.00],
                ['id_product'=>30,'price'=>36537.00],
                ['id_product'=>31,'price'=>20822.00],
                ['id_product'=>32,'price'=>1777.00],
                ['id_product'=>33,'price'=>7336.00],
                ['id_product'=>34,'price'=>534473.00],
                ['id_product'=>35,'price'=>3351.00],
                ['id_product'=>36,'price'=>1100.00],
                ['id_product'=>37,'price'=>1321.00],
                ['id_product'=>38,'price'=>393.00],
                ['id_product'=>39,'price'=>1625.00],
                ['id_product'=>40,'price'=>6620.00],
                ['id_product'=>41,'price'=>2967.00],
                ['id_product'=>42,'price'=>1289.00],
                ['id_product'=>43,'price'=>1914.00],
                ['id_product'=>44,'price'=>924.00],
                ['id_product'=>45,'price'=>4413.00],
                ['id_product'=>46,'price'=>6128.00],
                ['id_product'=>47,'price'=>6796.00],
                ['id_product'=>48,'price'=>14090.00],
                ['id_product'=>49,'price'=>10199.00],
                ['id_product'=>50,'price'=>33503.00],
                ['id_product'=>51,'price'=>11417.00],
                ['id_product'=>52,'price'=>62944.00],
                ['id_product'=>53,'price'=>19340.00],
                ['id_product'=>54,'price'=>28499.00],
                ['id_product'=>55,'price'=>33311.00],
                ['id_product'=>56,'price'=>12990.00],
                ['id_product'=>57,'price'=>16205.00],
                ['id_product'=>58,'price'=>13837.00],
                ['id_product'=>59,'price'=>19581.00],
                ['id_product'=>60,'price'=>21055.00],
                ['id_product'=>61,'price'=>16990.00],
                ['id_product'=>62,'price'=>17795.00],
                ['id_product'=>63,'price'=>13137.00],
                ['id_product'=>64,'price'=>23674.00],
                ['id_product'=>65,'price'=>23700.00],
                ['id_product'=>66,'price'=>37051.00],
                ['id_product'=>67,'price'=>19019.00],
                ['id_product'=>68,'price'=>19628.00],
                ['id_product'=>69,'price'=>69498.00],
                ['id_product'=>70,'price'=>69999.00],
                ['id_product'=>71,'price'=>30271.00],
                ['id_product'=>72,'price'=>24170.00],
                ['id_product'=>73,'price'=>25650.00],
                ['id_product'=>74,'price'=>33205.00],
                ['id_product'=>75,'price'=>23492.00],
                ['id_product'=>76,'price'=>53450.00],
                ['id_product'=>77,'price'=>35500.00],
                ['id_product'=>78,'price'=>33750.00],
                ['id_product'=>79,'price'=>86920.00],
                ['id_product'=>80,'price'=>33800.00],
                ['id_product'=>81,'price'=>419900.00],
                ['id_product'=>82,'price'=>39810.00]
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
        Schema::table('prices', function (Blueprint $table) {
            DB::table('prices')->truncate();
        });
    }
};
