<?php

namespace App\Providers;

use App\Order;
use App\Policies\OrderPolicy;
use App\Policies\ProductPolicy;
use App\Product;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
        Order::class => OrderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('viewProductReviews', function (User $user, Product $product) {
            //Check if user can view reviews for product
        });
        Gate::define('createReviewForProduct', function (User $user, Product $product) {
            //Check if user can create review for product
        });
        Gate::define('rateReview', function (User $user) {
            //Check if user can rate reviews for product
        });
    }
}
