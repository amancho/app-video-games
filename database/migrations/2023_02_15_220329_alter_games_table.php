<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterGamesTable extends Migration
{

    private const GAMES_TABLE  = 'games';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::GAMES_TABLE, function (Blueprint $table) {
            $table->decimal('price', 6, 2)->after('image_url')->default(0);
        });

        Schema::table(self::GAMES_TABLE, function (Blueprint $table) {
            $table->datetime('release_date')->before('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::GAMES_TABLE, static function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table(self::GAMES_TABLE, static function (Blueprint $table) {
            $table->dropColumn('release_date');
        });
    }
}
