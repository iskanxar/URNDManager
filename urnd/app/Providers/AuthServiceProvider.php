<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Project;
use App\Models\Team;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('viewusers', fn(User $user) => $user->role_id == 1 );
        Gate::define('leader', fn(User $user) => $user->role_id == 2 );
        Gate::define('viewstaffs', fn(User $user) => $user->role_id == 1 || $user->role_id == 2);
        Gate::define('create', fn(User $user) => $user->role_id == 1 );
        Gate::define('update_project', fn(User $user, Project $project) => $user->role_id == 2 && $user->name === $project->leader_name);
        Gate::define('update_team', fn(User $user, Team $team) => $user->role_id == 2 && $user->name === $team->leader_name);
        Gate::define('delete', fn(User $user) => $user->role_id == 1 );
    }
}
