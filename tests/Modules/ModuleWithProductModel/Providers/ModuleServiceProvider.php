<?php
/**
 * Contains the ModuleServiceProvider class.
 *
 * @copyright   Copyright (c) 2020 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2020-08-31
 *
 */

namespace Konekt\Concord\Tests\Modules\ModuleWithProductModel\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use Konekt\Concord\Tests\Modules\ModuleWithProductModel\Models\Product;
use Konekt\Concord\Tests\Modules\ModuleWithProductModel\Models\ProductType;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Product::class,
        ProductType::class,
    ];
}
