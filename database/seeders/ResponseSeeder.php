<?php

namespace Database\Seeders;

use App\Models\Response;
use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *d
     * @return void
     */
    public function run()
    {
        Response::Create(['name' => 'Text answer', 'icon' => 'bi bi-file-font']);
        Response::Create(['name' => 'Document number', 'icon' => 'bi bi-6-square']);
        Response::Create(['name' => 'Checkbox', 'icon' => 'bi bi-check2-square']);
        Response::Create(['name' => 'Number', 'icon' => 'bi bi-6-square']);
        Response::Create(['name' => 'Date & Time', 'icon' => 'bi bi-calendar-date']);
        Response::Create(['name' => 'Signature', 'icon' => 'bi bi-vector-pen']);
        Response::Create(['name' => 'Multiple Choice', 'icon' => 'bi bi-patch-question']);
        Response::Create(['name' => 'Location', 'icon' => 'bi bi-patch-question']);
        Response::Create(['name' => 'Slider', 'icon' => 'bi bi-patch-question']);
        Response::Create(['name' => 'Instruction', 'icon' => 'bi bi-patch-question']);
        Response::Create(['name' => 'Media', 'icon' => 'bi bi-patch-question']);
    }
}
