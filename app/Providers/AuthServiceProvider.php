<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\User;
use App\Policies\AuthorPolicy;
use App\Policies\BookPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PublisherPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Permission::class => PermissionPolicy::class,
        Role::class => RolePolicy::class,
        User::class => UserPolicy::class,

        //Books
        Author::class => AuthorPolicy::class,
        Publisher::class => PublisherPolicy::class,
        Book::class => BookPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
