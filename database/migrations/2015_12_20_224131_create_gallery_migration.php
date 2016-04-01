<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
   public function up()
    {
         Schema::create('images', function(Blueprint $table) {
             
			$table->increments('id');
			$table->timestamps();
                        
			$table->string('title');
                        $table->text('details');
                        
                        $table->date('snapDate');
                        $table->time('snapTime');
                        
                        $table->string('place');
                        
                        
                        $table->text('dlink');
                        
                        
                        
                        
                        
			
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
        Schema::drop('images');
    }
}
