<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Brands;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Brands::create([
            'name'      => 'Teh Poci',
            'logo'      => 'https://www.jagel.id/api/listimage/v/Es-Teh-Poci-0-1345e1d069ac5330.jpg',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Janji Jiwa',
            'logo'      => 'https://jiwagroup.com/media/brand/brand_logo-1625027779Janji-Jiwa-480x160.png',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Mixue',
            'logo'      => 'https://seeklogo.com/images/M/mixue-logo-6AE8953ADB-seeklogo.com.png',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Sabana Fried Chicken',
            'logo'      => 'https://www.storania.com/wp-content/sabai/File/files/6205ba22ab87b906a0f215c95094a0d5.png',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Alfamart',
            'logo'      => 'https://upload.wikimedia.org/wikipedia/commons/8/86/Alfamart_logo.svg',
            'category'   => 'Retail',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Indomaret',
            'logo'      => 'https://southcity.co.id/wp-content/uploads/2021/04/Logo-tenant-8.jpg',
            'category'   => 'Retail',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Shell',
            'logo'      => 'https://logos-world.net/wp-content/uploads/2020/11/Shell-Logo-1971-1995.png',
            'category'   => 'Retail',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Apotek K24',
            'logo'      => 'https://upload.wikimedia.org/wikipedia/id/8/89/Logo_Apotek_K-24.png',
            'category'   => 'Retail',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Roti O',
            'logo'      => 'https://semua.sale/media/avatar/3512O_logo.jpg',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);

        Brands::create([
            'name'      => 'Jelly Potter',
            'logo'      => 'https://franchisepedia.id/wp-content/uploads/2022/07/jp-logo.jpg',
            'category'   => 'Food and Beverage',
            'link'      => '',
        ]);
    }
}
