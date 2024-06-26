<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name')->nullable();
            $table->string('email')->unique();
            $table->string('user_type');
            $table->string('image')->nullable();
            $table->string('organization_ids')->default(0);
            $table->string('branch_ids')->default(0);
            $table->string('cost_center_ids')->default(0);
            $table->string('store_ids')->default(0);
            $table->integer('ref_id')->default(0);
            $table->integer('status')->default(1);
            $table->integer('_ac_type')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = User::create([
            'name' => 'Admin', 
            'user_type' => 'admin', 
            'email' => 'admin@gmail.com',
            'organization_ids' => '1',
            'branch_ids' => '1',
            'cost_center_ids' => '1',
            'store_ids' => '1',
            'password' => bcrypt('admin@1234')
        ]);
  
        // $role = Role::create(['name' => 'SA']);
   
        // $permissions = Permission::pluck('id','id')->all();
  
        // $role->syncPermissions($permissions);
   
        // $user->assignRole([$role->id]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
