<?php

use Illuminate\Database\Seeder;

class customerSearchs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);
         DB::table('customer_search')->insert(['name'=> str_random(10),'lastname'=> str_random(10),'sex'=> str_random(10),'email'=> str_random(10).'@gmail.com','phone'=> str_random(10)
         	,]);




          	
    }
}
