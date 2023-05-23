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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('account_created_by');
            $table->string('name');
            $table->string('image')->default('defaultcom.jpg');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('company_id')->nullable();
            $table->string('title');
            $table->string('company_name');
            $table->integer('industry_type')->nullable();
            $table->string('address');
            $table->integer('identity_type')->nullable();
            $table->string('pan')->nullable();
            $table->string('gstno')->nullable();
            $table->integer('registration_approved')->nullable()->default(0);
            $table->integer('status')->nullable();
            $table->string('fcm_token')->nullable();
            $table->string('device_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('companies');
    }
};
