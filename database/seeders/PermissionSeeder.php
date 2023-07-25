<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::truncate();



        // Customer Permissions
        Role::create(['name' => 'customer']);
        Permission::create(['name' => 'view_customer']);
        //Permission::create(['name' => 'customer.balance']);
        //Permission::create(['name' => 'customer.balance.index']);
        //Permission::create(['name' => 'customer.balance.create']);
        //Permission::create(['name' => 'customer.balance.store']);
        //Permission::create(['name' => 'customer.balance.show']);
        //Permission::create(['name' => 'customer.balance.edit']);
        //Permission::create(['name' => 'customer.balance.update']);
        //Permission::create(['name' => 'customer.balance.destroy']);
        Permission::create(['name' => 'customer.business']);
        Permission::create(['name' => 'customer.business.index']);
        Permission::create(['name' => 'customer.orders']);
        Permission::create(['name' => 'customer.orders.index']);
        Permission::create(['name' => 'customer.orders.create']);
        Permission::create(['name' => 'customer.orders.store']);
        Permission::create(['name' => 'customer.orders.show']);
        Permission::create(['name' => 'customer.orders.edit']);
        Permission::create(['name' => 'customer.orders.update']);
        Permission::create(['name' => 'customer.orders.items']);
        Permission::create(['name' => 'customer.orders.items.index']);
        Permission::create(['name' => 'customer.orders.items.show']);
        Permission::create(['name' => 'customer.orders.items.edit']);
        Permission::create(['name' => 'customer.orders.items.update']);
        Permission::create(['name' => 'customer.orders.items.create']);
        Permission::create(['name' => 'customer.orders.items.store']);
        Permission::create(['name' => 'customer.orders.items.destroy']);
        Permission::create(['name' => 'customer.items']);
        Permission::create(['name' => 'customer.items.index']);
        Permission::create(['name' => 'customer.items.show']);
        Permission::create(['name' => 'customer.carts']);
        Permission::create(['name' => 'customer.carts.index']);
        Permission::create(['name' => 'customer.carts.create']);
        Permission::create(['name' => 'customer.carts.store']);
        Permission::create(['name' => 'customer.carts.show']);
        Permission::create(['name' => 'customer.carts.edit']);
        Permission::create(['name' => 'customer.carts.update']);
        Permission::create(['name' => 'customer.carts.destroy']);
        Permission::create(['name' => 'customer.carts.items']);
        Permission::create(['name' => 'customer.carts.items.index']);
        Permission::create(['name' => 'customer.carts.items.show']);
        Permission::create(['name' => 'customer.carts.items.edit']);
        Permission::create(['name' => 'customer.carts.items.update']);
        Permission::create(['name' => 'customer.carts.items.create']);
        Permission::create(['name' => 'customer.carts.items.store']);
        Permission::create(['name' => 'customer.carts.items.destroy']);
        Permission::create(['name' => 'customer.user.profile']);

        $role = Role::findByName('customer');
        $role->givePermissionTo([
            'view_customer',
            //'customer.balance',
            //'customer.balance.index',
            //'customer.balance.create',
            //'customer.balance.store',
            //'customer.balance.show',
            //'customer.balance.edit',
            //'customer.balance.update',
            //'customer.balance.destroy',
            'customer.business',
            'customer.business.index',
            'customer.orders',
            'customer.orders.index',
            'customer.orders.create',
            'customer.orders.store',
            'customer.orders.show',
            'customer.orders.edit',
            'customer.orders.update',
            'customer.orders.items',
            'customer.orders.items.index',
            'customer.orders.items.show',
            'customer.orders.items.edit',
            'customer.orders.items.update',
            'customer.orders.items.create',
            'customer.orders.items.store',
            'customer.orders.items.destroy',
            'customer.items',
            'customer.items.index',
            'customer.items.show',
            'customer.carts',
            'customer.carts.index',
            'customer.carts.create',
            'customer.carts.store',
            'customer.carts.show',
            'customer.carts.edit',
            'customer.carts.update',
            'customer.carts.destroy',
            'customer.carts.items',
            'customer.carts.items.index',
            'customer.carts.items.show',
            'customer.carts.items.edit',
            'customer.carts.items.update',
            'customer.carts.items.create',
            'customer.carts.items.store',
            'customer.carts.items.destroy',
            'customer.user.profile',
        ]);

        //Employee Permissions
        Role::create(['name' => 'administrator']);
        Permission::create(['name' => 'view_employee']);
        Permission::create(['name' => 'employee.business']);
        Permission::create(['name' => 'employee.business.index']);
        Permission::create(['name' => 'employee.business.show']);
        Permission::create(['name' => 'employee.business.edit']);
        Permission::create(['name' => 'employee.business.update']);
        Permission::create(['name' => 'employee.orders']);
        Permission::create(['name' => 'employee.orders.index']);
        Permission::create(['name' => 'employee.orders.show']);
        Permission::create(['name' => 'employee.orders.edit']);
        Permission::create(['name' => 'employee.orders.update']);
        Permission::create(['name' => 'employee.orders.items']);
        Permission::create(['name' => 'employee.orders.items.index']);
        Permission::create(['name' => 'employee.orders.items.show']);
        Permission::create(['name' => 'employee.items']);
        Permission::create(['name' => 'employee.items.index']);
        Permission::create(['name' => 'employee.items.create']);
        Permission::create(['name' => 'employee.items.store']);
        Permission::create(['name' => 'employee.items.show']);
        Permission::create(['name' => 'employee.items.edit']);
        Permission::create(['name' => 'employee.items.update']);
        Permission::create(['name' => 'employee.items.destroy']);
        Permission::create(['name' => 'employee.members']);
        Permission::create(['name' => 'employee.members.index']);
        Permission::create(['name' => 'employee.members.create']);
        Permission::create(['name' => 'employee.members.store']);
        Permission::create(['name' => 'employee.members.show']);
        Permission::create(['name' => 'employee.members.edit']);
        Permission::create(['name' => 'employee.members.update']);
        Permission::create(['name' => 'employee.members.destroy']);
        Permission::create(['name' => 'employee.user.profile']);
        Permission::create(['name' => 'employee.roles']);
        Permission::create(['name' => 'employee.roles.index']);
        Permission::create(['name' => 'employee.roles.create']);
        Permission::create(['name' => 'employee.roles.store']);
        Permission::create(['name' => 'employee.roles.show']);
        Permission::create(['name' => 'employee.roles.edit']);
        Permission::create(['name' => 'employee.roles.update']);
        Permission::create(['name' => 'employee.roles.destroy']);
        Permission::create(['name' => 'employee.permissions']);
        Permission::create(['name' => 'employee.permissions.index']);
        Permission::create(['name' => 'employee.permissions.create']);
        Permission::create(['name' => 'employee.permissions.store']);
        Permission::create(['name' => 'employee.permissions.show']);
        Permission::create(['name' => 'employee.permissions.edit']);
        Permission::create(['name' => 'employee.permissions.update']);
        Permission::create(['name' => 'employee.permissions.destroy']);


        $role = Role::findByName('administrator');
        $role->givePermissionTo([
            'view_employee',
            'employee.business',
            'employee.business.index',
            'employee.business.show',
            'employee.business.edit',
            'employee.business.update',
            'employee.orders',
            'employee.orders.index',
            'employee.orders.show',
            'employee.orders.edit',
            'employee.orders.update',
            'employee.orders.items',
            'employee.orders.items.index',
            'employee.orders.items.show',
            'employee.items',
            'employee.items.index',
            'employee.items.create',
            'employee.items.store',
            'employee.items.show',
            'employee.items.edit',
            'employee.items.update',
            'employee.items.destroy',
            'employee.members',
            'employee.members.index',
            'employee.members.create',
            'employee.members.store',
            'employee.members.show',
            'employee.members.edit',
            'employee.members.update',
            'employee.members.destroy',
            'employee.user.profile',
            'employee.roles',
            'employee.roles.index',
            'employee.roles.create',
            'employee.roles.store',
            'employee.roles.show',
            'employee.roles.edit',
            'employee.roles.update',
            'employee.roles.destroy',
            'employee.permissions',
            'employee.permissions.index',
            'employee.permissions.create',
            'employee.permissions.store',
            'employee.permissions.show',
            'employee.permissions.edit',
            'employee.permissions.update',
            'employee.permissions.destroy',
        ]);

        //Super Admin Permissions
        Role::create(['name' => 'super-admin']);
        Permission::create(['name' => 'view_dashboard']);
        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'dashboard.users']);
        Permission::create(['name' => 'dashboard.users.index']);
        Permission::create(['name' => 'dashboard.users.create']);
        Permission::create(['name' => 'dashboard.users.store']);
        Permission::create(['name' => 'dashboard.users.show']);
        Permission::create(['name' => 'dashboard.users.edit']);
        Permission::create(['name' => 'dashboard.users.update']);
        Permission::create(['name' => 'dashboard.users.destroy']);
        Permission::create(['name' => 'dashboard.roles']);
        Permission::create(['name' => 'dashboard.roles.index']);
        Permission::create(['name' => 'dashboard.roles.create']);
        Permission::create(['name' => 'dashboard.roles.store']);
        Permission::create(['name' => 'dashboard.roles.show']);
        Permission::create(['name' => 'dashboard.roles.edit']);
        Permission::create(['name' => 'dashboard.roles.update']);
        Permission::create(['name' => 'dashboard.roles.destroy']);
        Permission::create(['name' => 'dashboard.permissions']);
        Permission::create(['name' => 'dashboard.permissions.index']);
        Permission::create(['name' => 'dashboard.permissions.create']);
        Permission::create(['name' => 'dashboard.permissions.store']);
        Permission::create(['name' => 'dashboard.permissions.show']);
        Permission::create(['name' => 'dashboard.permissions.edit']);
        Permission::create(['name' => 'dashboard.permissions.update']);
        Permission::create(['name' => 'dashboard.permissions.destroy']);
        Permission::create(['name' => 'dashboard.business']);
        Permission::create(['name' => 'dashboard.business.index']);
        Permission::create(['name' => 'dashboard.business.create']);
        Permission::create(['name' => 'dashboard.business.store']);
        Permission::create(['name' => 'dashboard.business.show']);
        Permission::create(['name' => 'dashboard.business.edit']);
        Permission::create(['name' => 'dashboard.business.update']);
        Permission::create(['name' => 'dashboard.business.destroy']);
        Permission::create(['name' => 'dashboard.employee.']);
        Permission::create(['name' => 'dashboard.employee./index']);
        Permission::create(['name' => 'dashboard.employee./create']);
        Permission::create(['name' => 'dashboard.employee./store']);
        Permission::create(['name' => 'dashboard.employee./show']);
        Permission::create(['name' => 'dashboard.employee./edit']);
        Permission::create(['name' => 'dashboard.employee./update']);
        Permission::create(['name' => 'dashboard.employee./destroy']);
        Permission::create(['name' => 'dashboard.customers']);
        Permission::create(['name' => 'dashboard.customers.index']);
        Permission::create(['name' => 'dashboard.customers.create']);
        Permission::create(['name' => 'dashboard.customers.store']);
        Permission::create(['name' => 'dashboard.customers.show']);
        Permission::create(['name' => 'dashboard.customers.edit']);
        Permission::create(['name' => 'dashboard.customers.update']);
        Permission::create(['name' => 'dashboard.customers.destroy']);
        Permission::create(['name' => 'dashboard.items']);
        Permission::create(['name' => 'dashboard.items.index']);
        Permission::create(['name' => 'dashboard.items.create']);
        Permission::create(['name' => 'dashboard.items.store']);
        Permission::create(['name' => 'dashboard.items.show']);
        Permission::create(['name' => 'dashboard.items.edit']);
        Permission::create(['name' => 'dashboard.items.update']);
        Permission::create(['name' => 'dashboard.items.destroy']);
        Permission::create(['name' => 'dashboard.orders']);
        Permission::create(['name' => 'dashboard.orders.index']);
        Permission::create(['name' => 'dashboard.orders.create']);
        Permission::create(['name' => 'dashboard.orders.store']);
        Permission::create(['name' => 'dashboard.orders.show']);
        Permission::create(['name' => 'dashboard.orders.edit']);
        Permission::create(['name' => 'dashboard.orders.update']);
        Permission::create(['name' => 'dashboard.orders.destroy']);
        Permission::create(['name' => 'dashboard.orders.items']);
        Permission::create(['name' => 'dashboard.orders.items.index']);
        Permission::create(['name' => 'dashboard.orders.items.create']);
        Permission::create(['name' => 'dashboard.orders.items.store']);
        Permission::create(['name' => 'dashboard.orders.items.show']);
        Permission::create(['name' => 'dashboard.orders.items.edit']);
        Permission::create(['name' => 'dashboard.orders.items.update']);
        Permission::create(['name' => 'dashboard.orders.items.destroy']);
        Permission::create(['name' => 'dashboard.carts']);
        Permission::create(['name' => 'dashboard.carts.index']);
        Permission::create(['name' => 'dashboard.carts.create']);
        Permission::create(['name' => 'dashboard.carts.store']);
        Permission::create(['name' => 'dashboard.carts.show']);
        Permission::create(['name' => 'dashboard.carts.edit']);
        Permission::create(['name' => 'dashboard.carts.update']);
        Permission::create(['name' => 'dashboard.carts.destroy']);
        Permission::create(['name' => 'dashboard.carts.items']);
        Permission::create(['name' => 'dashboard.carts.items.index']);
        Permission::create(['name' => 'dashboard.carts.items.create']);
        Permission::create(['name' => 'dashboard.carts.items.store']);
        Permission::create(['name' => 'dashboard.carts.items.show']);
        Permission::create(['name' => 'dashboard.carts.items.edit']);
        Permission::create(['name' => 'dashboard.carts.items.update']);
        Permission::create(['name' => 'dashboard.carts.items.destroy']);
        Permission::create(['name' => 'dashboard.genders']);
        Permission::create(['name' => 'dashboard.genders.index']);
        Permission::create(['name' => 'dashboard.genders.create']);
        Permission::create(['name' => 'dashboard.genders.store']);
        Permission::create(['name' => 'dashboard.genders.show']);
        Permission::create(['name' => 'dashboard.genders.edit']);
        Permission::create(['name' => 'dashboard.genders.update']);
        Permission::create(['name' => 'dashboard.genders.destroy']);
        Permission::create(['name' => 'dashboard.itemTypes']);
        Permission::create(['name' => 'dashboard.itemTypes.index']);
        Permission::create(['name' => 'dashboard.itemTypes.create']);
        Permission::create(['name' => 'dashboard.itemTypes.store']);
        Permission::create(['name' => 'dashboard.itemTypes.show']);
        Permission::create(['name' => 'dashboard.itemTypes.edit']);
        Permission::create(['name' => 'dashboard.itemTypes.update']);
        Permission::create(['name' => 'dashboard.itemTypes.destroy']);
        Permission::create(['name' => 'dashboard.']);

        $role = Role::findByName('super-admin');
        $role->givePermissionTo(Permission::all());
    }
}
