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
        Schema::create('monthly_reports', function (Blueprint $table) {
            $table->string('month');
            $table->integer('add_prod_to_card');
            $table->integer('complete_purchase');
            $table->integer('visit_prem_page');
            $table->integer('send_inquiries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_reports');
    }
};
