<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->string('last_name');
             $table->string('username')->unique();
             $table->string('phone')->nullable();
             $table->string('address')->nullable();
             $table->text('fb_token')->nullable();
             $table->text('fb_id')->nullable();
             $table->text('fb_photo')->nullable();
             $table->text('fb_name')->nullable();
             $table->text('g_oauth')->nullable();
             $table->text('g_fname')->nullable();
             $table->text('femail')->nullable();
             $table->text('g_lname')->nullable();
             $table->text('g_picture')->nullable();
             $table->text('link')->nullable();
             $table->text('g_email')->nullable();
             
             $table->string('gender')->nullable();
             $table->string('idcard')->nullable();
             $table->string('since')->nullable();
             $table->date('birthday')->nullable();
             $table->integer('parent_id')->nullable();
             $table->string('profession')->nullable();

            $table->string('business')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->date('date')->nullable();
            
            $table->integer('dormitory_id')->nullable();
            $table->integer('transport_id')->nullable();
            $table->integer('student_session')->default('1');
            $table->integer('board')->default('0');
            $table->integer('solvencia')->default('1');
            $table->integer('class_id')->nullable();
  
            $table->string('diseases')->nullable();
            $table->string('allergies')->nullable();
            $table->string('doctor')->nullable();
            $table->string('doctor_phone')->nullable();
            $table->string('authorized_person')->nullable();
            $table->string('authorized_phone')->nullable();
            $table->string('note')->nullable();
            $table->string('year')->nullable();

            $table->string('nit')->nullable();
            $table->string('direccion_fac')->nullable();
            $table->string('nombre_fac')->nullable();
  

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_name', 'username', 'phone','address','fb_token','fb_id','fb_photo','fb_name','g_oauth','g_fname','femail','g_lname','g_picture','link','g_email','gender','idcard','since','birthday','parent_id','profession','business','business_phone','home_phone','date','dormitory_id','transport_id','student_session','board','solvencia','class_id','diseases','allergies','doctor','doctor_phone','authorized_person','note','year','nit','direccion_fac','nombre_fac']);
        });
    }
}
