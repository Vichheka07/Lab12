<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts=[];
        foreach(range(1,50) as $index){
            $contact = [
                'first_name'=>'Fist Name'.$index,
                'last_name'=>'Last Name'.$index,
                'phone'=>"Phone".$index,
                'email' => 'email'.$index.'@company.com',
                'address' => 'Address '.$index,
                'company_id' => random_int(1,9),
                'created_at' => now(),
                'updated_at' => now()
            ];
            $contacts[] = $contact;
        }
        DB::table('contacts')->truncate();
        DB::table('contacts')->insert($contacts);    
    }
}
