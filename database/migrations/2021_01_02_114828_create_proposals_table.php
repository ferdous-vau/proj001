<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $proposal) {
            $proposal->bigIncrements('id');
            $proposal->string('emailaddress')->unique();
            $proposal->string('mobileno')->unique();
            $proposal->timestamp('email_verified_at')->nullable();
            $proposal->text('members')->nullable();
            $proposal->string('projectTitle',150)->nullable();
            $proposal->string('coursecode',8)->nullable();
            $proposal->unsignedBigInteger('studentID')->nullable();
            $proposal->foreign('studentID')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
            $proposal->string('year',15)->nullable();
            $proposal->string('file')->nullable();
            $proposal->unsignedBigInteger('supervisor')->nullable();
            $proposal->foreign('supervisor')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
            $proposal->datetime('schedule')->nullable();
            $proposal->string('status')->default('Pending');
            $proposal->rememberToken();
            $proposal->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
