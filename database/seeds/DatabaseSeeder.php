<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
    }
    public function cleanup($inventaris)
    {       
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE `$inventaris` SET `$inventaris`.`id` = @count:= @count + 1;");
        DB::statement("ALTER TABLE `$inventaris` AUTO_INCREMENT = 1;");
    }
}
