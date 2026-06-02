<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function ($table) {
    
            $table->id();
    
            $table->string('patient_code')
                  ->unique();
    
            $table->string('name');
    
            $table->enum('gender',[
                'Male',
                'Female',
                'Other'
            ]);
    
            $table->date('dob')
                  ->nullable();
    
            $table->string('phone');
    
            $table->string('email')
                  ->nullable();
    
            $table->text('address')
                  ->nullable();
    
            $table->timestamps();
    
        });
    }
}
