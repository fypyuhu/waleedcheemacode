<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('videos', function(Blueprint $table) {
             
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
                        $table->date('rDate');
                        $table->string('genre');
                        $table->string('producer');
                        $table->string('sponser');
                        $table->text('details');
                        
                        $table->boolean('isLocal')->default(0);
                        $table->text('dlink');
                        
                        
                        $table->boolean('isDailymotion')->default(0);
                        $table->text('dailymotion');
                        
                        $table->boolean('isYoutube')->default(0);
                        $table->text('youtube');
                        
                        
                        
                        
			
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
        Schema::drop('videos');
    }
}
