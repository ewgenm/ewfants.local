<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Preference;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Gender::unguard();

		    DB::table('genders')->insert(['name'=>'Мужчина']);
		    DB::table('genders')->insert(['name'=>'Женщина']);

        Gender::reguard();
        Preference::unguard();

        DB::table('preferences')->insert(['name'=>'Мужское предпочтение 1', 'preference_gender'=>'1']);
        DB::table('preferences')->insert(['name'=>'Мужское предпочтение 2', 'preference_gender'=>'1']);
        DB::table('preferences')->insert(['name'=>'Мужское предпочтение 3', 'preference_gender'=>'1']);
        DB::table('preferences')->insert(['name'=>'Женское предпочтение 1', 'preference_gender'=>'2']);
        DB::table('preferences')->insert(['name'=>'Женское предпочтение 2', 'preference_gender'=>'2']);
        DB::table('preferences')->insert(['name'=>'Женское предпочтение 3', 'preference_gender'=>'2']);
        DB::table('preferences')->insert(['name'=>'Общее предпочтение 1', 'preference_gender'=>'3']);
        DB::table('preferences')->insert(['name'=>'Общее предпочтение 2', 'preference_gender'=>'3']);
        DB::table('preferences')->insert(['name'=>'Общее предпочтение 3', 'preference_gender'=>'3']);
        Preference::reguard();
	}
}
