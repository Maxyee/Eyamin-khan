<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('supplierName');
            $table->enum('gender', ['male','female']);
            $table->char('nationalID',17)->unique();
            $table->integer('phoneNumber')->unique();
            $table->string('emailAddress');
            $table->string('socialMedia');
            $table->string('natureOfBusiness');
            $table->string('farmName');
            $table->string('category');
            $table->string('tradeLicense')->unique();
            $table->string('BusinessAddress');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode');
            $table->longText('remarks');
            $table->string('memberOfAssociation');
            $table->string('avatar')->default('default.jpg');
            $table->boolean('registrationStatus');
            $table->boolean('complete')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('suppliers');
    }
}
