<?php

use $useClassName;
use Illuminate\Database\Schema\Blueprint;

class $className extends $baseClassName
{
    public function up()
    {
        $this->schema->create('', function(Blueprint $table) {
            //
        });
    }

    public function down()
    {
        $this->schema->drop('');
    }
}
