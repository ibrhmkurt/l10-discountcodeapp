<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Code::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/TEST-DiscountCodes.csv"), "r");
        while (($record = fgetcsv($input_file, 50000)) !== FALSE)
        {
            if (!$heading)
            {
                $code = array(
                    "discount_code" => $record['0'],
                );
                Code::create($code);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
