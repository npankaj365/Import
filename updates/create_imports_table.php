<?php namespace Tiipiik\Import\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateImportsTable extends Migration
{

    public function up()
    {
        Schema::create('tiipiik_import_imports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tiipiik_import_imports');
    }

}