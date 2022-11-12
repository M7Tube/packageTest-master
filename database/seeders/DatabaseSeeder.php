<?php

namespace Database\Seeders;

use App\Models\AccessCode;
use App\Models\Department;
use App\Models\HandOver;
use App\Models\Schedules;
use Spatie\Permission\Models\Role;
use App\Models\Subject;
use App\Models\User;
use App\Models\VisitType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ResponseSeeder::class,
        ]);
        AccessCode::Create(['code' => 123456]);
        Subject::Create([
            'name' => 'Installation',
            'lang' => 'en'
        ]);
        Subject::Create([
            'name' => 'Supply and installation',
            'lang' => 'en'
        ]);
        Subject::Create([
            'name' => 'Supply only',
            'lang' => 'en'
        ]);
        Subject::Create([
            'name' => 'Maintenance',
            'lang' => 'en'
        ]);
        Subject::Create([
            'name' => 'تركيب',
            'lang' => 'ar'
        ]);
        Subject::Create([
            'name' => 'تزويد وتركيب',
            'lang' => 'ar'
        ]);
        Subject::Create([
            'name' => 'معدات فقط',
            'lang' => 'ar'
        ]);
        Subject::Create([
            'name' => 'صيانة',
            'lang' => 'ar'
        ]);
        Department::Create([
            'name' => 'Damascus',
            'address' => 'Syria,Damascus,Mazzeh'
        ]);
        // Role::Create([
        //     'name' => 'Main Admin',
        // ]);
        // Role::Create([
        //     'name' => 'Sales Manager',
        // ]);
        // Role::Create([
        //     'name' => 'Report Manager',
        // ]);
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $role1 = Role::create(['name' => 'Super-Admin']);
        $super_admin = User::Create([
            'first_name' => 'app',
            'last_name' => 'admin',
            'email' => 'admin@c-rpt.com',
            'active' => 1,
            'need_recreate' => 0,
            'password' => Hash::make('12345'),
        ]);
        $super_admin->assignRole($role1);
        //
        // User::Create([
        //     'first_name' => 'muhannad',
        //     'last_name' => 'jarrah',
        //     'email' => 'muhannad@c-rpt.com',
        //     'active' => 0,
        //     'need_recreate' => 0,
        //     'password' => Hash::make('b1234'),
        // ]);
        // User::Create([
        //     'first_name' => 'obada',
        //     'last_name' => 'halabi',
        //     'email' => 'obada@c-rpt.com',
        //     'active' => 0,
        //     'need_recreate' => 0,
        //     'password' => Hash::make('c1234'),
        // ]);
        // Template::Create([
        //     'name' => 'Tesd',
        //     'desc' => 'hahahahah',
        //     'pic' => 'logo.png',
        //     'instructions' => 'Test From Mahmoud',
        //     'signatures' => '[{"title":"hehe"},{"title":"hwhw"}]',
        //     'user_id' => '1',
        // ]);
        // Template::Create([
        //     'name' => 'hwhwhwh',
        //     'desc' => 'hahahahah',
        //     'pic' => 'logo.png',
        //     'with_visit_type' => 1,
        //     'instructions' => 'Test From Mahmoud',
        //     'signatures' => '[{"title":"hehe"},{"title":"hwhw"}]',
        //     'user_id' => '1',
        // ]);
        // Template::Create([
        //     'name' => 'heeeeeeeee',
        //     'desc' => 'hwwwwwwwwww',
        //     'pic' => 'logo.png',
        //     'instructions' => 'Test From Mahmoud',
        //     'signatures' => '[{"title":"hehe"},{"title":"hwhw"}]',
        //     'user_id' => '1',
        // ]);
        Schedules::Create([
            'template_id' => 1,
            'assigned_by' => 1,
            'assigned_to' => 1,
            'status' => 1,
            'next_due' => Carbon::now(),
        ]);
    }
}
