<A?php

use Illuminate\Support\Facades\Schema;
...
class AppServiceProvider extends ServiceProvider
{
...
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
