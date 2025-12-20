<?php
// app/Providers/AppServiceProvider.php

use Illuminate\Support\serviceProvider;
use App\Models\Product;
use App\Observers\ProductObserver;

class AppServiceProvider extends ServiceProvider
{
 public function register(): void
 {

 }

public function boot(): void
{
    Product::observe(ProductObserver::class);
}
}