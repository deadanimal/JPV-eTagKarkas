<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'P1: Pengurus Rumah Sembelih',
                'email' => 'jpv-etagkarkas-p1@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P2:Pemeriksa Daging',
                'email' => 'jpv-etagkarkas-p2@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P3:Pemeriksa Daging Negeri',
                'email' => 'jpv-etagkarkas-p3@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P4:Pentadbir',
                'email' => 'jpv-etagkarkas-p4@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],
            [
                'name' => 'P5:Ketua Seksyen',
                'email' => 'jpv-etagkarkas-p5@pipeline.com.my',
                'password' => Hash::make('PipelineForever'),
            ],                                                                              
        ]);


    }
}
