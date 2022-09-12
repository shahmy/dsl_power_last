<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('load_items', function (Blueprint $table) {
            $table
                ->foreign('appliance_category_id')
                ->references('id')
                ->on('appliance_categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('load_items', function (Blueprint $table) {
            $table->dropForeign(['appliance_category_id']);
        });
    }
};
