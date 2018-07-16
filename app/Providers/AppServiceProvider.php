<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Channel;
use App\Discussion;
use App\Reply;
use App\User;
use Auth;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('channels_side', Channel::all());
        View::share('channels', Channel::all());
        View::share('channel_count', Channel::all()->count());
        View::share('g_user', User::find(Auth::id()));
        View::share('discussion_count', Discussion::all()->count());
        View::share('reply_count', Reply::all()->count());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
