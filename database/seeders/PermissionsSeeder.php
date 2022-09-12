<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list aboutpages']);
        Permission::create(['name' => 'view aboutpages']);
        Permission::create(['name' => 'create aboutpages']);
        Permission::create(['name' => 'update aboutpages']);
        Permission::create(['name' => 'delete aboutpages']);

        Permission::create(['name' => 'list appliancecategories']);
        Permission::create(['name' => 'view appliancecategories']);
        Permission::create(['name' => 'create appliancecategories']);
        Permission::create(['name' => 'update appliancecategories']);
        Permission::create(['name' => 'delete appliancecategories']);

        Permission::create(['name' => 'list blogpages']);
        Permission::create(['name' => 'view blogpages']);
        Permission::create(['name' => 'create blogpages']);
        Permission::create(['name' => 'update blogpages']);
        Permission::create(['name' => 'delete blogpages']);

        Permission::create(['name' => 'list categories']);
        Permission::create(['name' => 'view categories']);
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'update categories']);
        Permission::create(['name' => 'delete categories']);

        Permission::create(['name' => 'list contactpages']);
        Permission::create(['name' => 'view contactpages']);
        Permission::create(['name' => 'create contactpages']);
        Permission::create(['name' => 'update contactpages']);
        Permission::create(['name' => 'delete contactpages']);

        Permission::create(['name' => 'list galleries']);
        Permission::create(['name' => 'view galleries']);
        Permission::create(['name' => 'create galleries']);
        Permission::create(['name' => 'update galleries']);
        Permission::create(['name' => 'delete galleries']);

        Permission::create(['name' => 'list homeaboutsections']);
        Permission::create(['name' => 'view homeaboutsections']);
        Permission::create(['name' => 'create homeaboutsections']);
        Permission::create(['name' => 'update homeaboutsections']);
        Permission::create(['name' => 'delete homeaboutsections']);

        Permission::create(['name' => 'list homepages']);
        Permission::create(['name' => 'view homepages']);
        Permission::create(['name' => 'create homepages']);
        Permission::create(['name' => 'update homepages']);
        Permission::create(['name' => 'delete homepages']);

        Permission::create(['name' => 'list homesliders']);
        Permission::create(['name' => 'view homesliders']);
        Permission::create(['name' => 'create homesliders']);
        Permission::create(['name' => 'update homesliders']);
        Permission::create(['name' => 'delete homesliders']);

        Permission::create(['name' => 'list loaditems']);
        Permission::create(['name' => 'view loaditems']);
        Permission::create(['name' => 'create loaditems']);
        Permission::create(['name' => 'update loaditems']);
        Permission::create(['name' => 'delete loaditems']);

        Permission::create(['name' => 'list packages']);
        Permission::create(['name' => 'view packages']);
        Permission::create(['name' => 'create packages']);
        Permission::create(['name' => 'update packages']);
        Permission::create(['name' => 'delete packages']);

        Permission::create(['name' => 'list partners']);
        Permission::create(['name' => 'view partners']);
        Permission::create(['name' => 'create partners']);
        Permission::create(['name' => 'update partners']);
        Permission::create(['name' => 'delete partners']);

        Permission::create(['name' => 'list partnerpages']);
        Permission::create(['name' => 'view partnerpages']);
        Permission::create(['name' => 'create partnerpages']);
        Permission::create(['name' => 'update partnerpages']);
        Permission::create(['name' => 'delete partnerpages']);

        Permission::create(['name' => 'list photos']);
        Permission::create(['name' => 'view photos']);
        Permission::create(['name' => 'create photos']);
        Permission::create(['name' => 'update photos']);
        Permission::create(['name' => 'delete photos']);

        Permission::create(['name' => 'list posts']);
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'update posts']);
        Permission::create(['name' => 'delete posts']);

        Permission::create(['name' => 'list products']);
        Permission::create(['name' => 'view products']);
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'update products']);
        Permission::create(['name' => 'delete products']);

        Permission::create(['name' => 'list productcategories']);
        Permission::create(['name' => 'view productcategories']);
        Permission::create(['name' => 'create productcategories']);
        Permission::create(['name' => 'update productcategories']);
        Permission::create(['name' => 'delete productcategories']);

        Permission::create(['name' => 'list projects']);
        Permission::create(['name' => 'view projects']);
        Permission::create(['name' => 'create projects']);
        Permission::create(['name' => 'update projects']);
        Permission::create(['name' => 'delete projects']);

        Permission::create(['name' => 'list tags']);
        Permission::create(['name' => 'view tags']);
        Permission::create(['name' => 'create tags']);
        Permission::create(['name' => 'update tags']);
        Permission::create(['name' => 'delete tags']);

        Permission::create(['name' => 'list testimonials']);
        Permission::create(['name' => 'view testimonials']);
        Permission::create(['name' => 'create testimonials']);
        Permission::create(['name' => 'update testimonials']);
        Permission::create(['name' => 'delete testimonials']);

        Permission::create(['name' => 'list videos']);
        Permission::create(['name' => 'view videos']);
        Permission::create(['name' => 'create videos']);
        Permission::create(['name' => 'update videos']);
        Permission::create(['name' => 'delete videos']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
