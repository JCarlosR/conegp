<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribers', function (Blueprint $table) {
            $table->increments('id');


            // Datos personales

            $table->string('first_name');
            $table->string('last_name');

            $table->string('identity_card');
            $table->date('birth_date');

            $table->string('email');

            $table->string('cellphone');
            $table->string('phone');

            $table->enum('gender', ['hombre', 'mujer']);
            $table->string('city');

            $table->string('address');

            $table->string('occupation');
            $table->string('workplace');

            $table->string('validation_document')->nullable();

            // Datos del pago

            $table->string('operation_number');
            $table->date('payment_date');

            $table->string('validation_voucher')->nullable();

            // Estado de la suscripción

            $table->boolean('active')->default(false);

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
        Schema::drop('suscribers');
    }
}
