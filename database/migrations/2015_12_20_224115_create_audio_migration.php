<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audios', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
                        $table->string('thumb');
                        $table->date('rDate');
                        $table->string('genre');
                        $table->string('producer');
                        $table->string('sponser');
                        $table->text('details');
                        $table->string('dlink');
                        
                        
                        
			
		});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audios');
    }
        //
    
    
    }

