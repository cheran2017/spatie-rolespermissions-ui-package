# spatie-rolespermissions-ui-package
Run <code> php artisan make:auth </code> first
1. Install Spatice Packages using <code>composer require spatie/laravelpermission:^2.36</code>
2. Install my package using <code>composer require cheran/rolespermissions</code>
3. Add Providers in to <code>config/app.php</code> <br>
<pre>
Spatie\Permission\PermissionServiceProvider::class ,
Cheran\RolesPermissions\RolesPermissionsServiceProvider::class,
</pre>

4. Run <code>composer dump-autoload </code>
5. Run <code>php artisan config:cache </code>
6. Run <code>php artisan vendor:publish</code> and choose <code>Provider: Cheran\RolesPermissions\RolesPermissionsServiceProvider</code> option
Now All the required filed published in to correct path.
7. Add listed Seeders in <code>DatabaseSeeder.php</code> file.
<pre>
        $this->call(PermissionTableSeeder::class);
        $this->call(PermissionGroupTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
</pre>
8. Add traits in User.php user model.
<pre>
    use Spatie\Permission\Traits\HasRoles;
</pre>
9. Inside User class.
<pre>
    use HasRoles;
</pre>
10. Run <code>composer dump-autoload </code>.
11. Finally  Run <code>php artisan migrate --seed </code> or <code>php artisan migrate:fresh --seed </code>.
12. Now you can login using by,
<pre>
email : admin@gmail.com
pwd   : qwerty
</pre>
13. call route <code>/roles-permissions/dashboard</code> and Enjoy !!!........
