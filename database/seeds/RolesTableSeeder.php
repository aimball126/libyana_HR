<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin= \App\Models\Role::create([
            'name'=>'super_admin',
            'display_name'=>'مدير النظام',
            'description'=>'Super Admin',
            
        ]);

        $development= \App\Models\Role::create([
            'name'=>'development',
            'display_name'=>'التطوير المؤسسي',
            'description'=>'development',
            
        ]);
        $internal_audit= \App\Models\Role::create([
            'name'=>'internal_audit',
            'display_name'=>'المراجعة الداخلية',
            'description'=>'Internal Audit',
            
        ]);
        $reception= \App\Models\Role::create([
            'name'=>'reception',
            'display_name'=>'الإستقبال',
            'description'=>'Reception',
            
        ]);
    
        $scientific_affairs= \App\Models\Role::create([
            'name'=>'scientific_affairs',
            'display_name'=>'إدارة الشؤون العلمية',
            'description'=>'Scientific Affairs',
            
        ]);
        $treasury= \App\Models\Role::create([
            'name'=>'treasury',
            'display_name'=>'الخزينة',
            'description'=>'Treasury',
            
        ]);
        $store= \App\Models\Role::create([
            'name'=>'store',
            'display_name'=>'مخزن',
            'description'=>'Store',
            
        ]);
        $accounts= \App\Models\Role::create([
            'name'=>'accounts',
            'display_name'=>'حسابات',
            'description'=>'Accounts',
            
        ]);
     
    }
    }

