<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Barang::create([
            'namaBarang' => 'Asus Pro 16X OLED',
            'harga' => 8000000,
            'stok' => 16,
            'sistem' => 'Windows 11 | Windows 10',
            'prosesor' => '11th Gen Intel®Core™ i7-1165G7 processor',
            'memory' => '8 GB / 512 GB, 16 GB / 512 GB',
            'photo' => 'Asus.webp',
            'ulasan' => 'Biarkan Vivobook Pro 16X OLED tanpa kompromi melepaskan kinerja kreatif Anda! Anda akan menikmati kinerja yang mudah dari prosesor Intel® Core™ H-series Generasi ke-12 dan NVIDIA® GeForce RTX® 3060 GPU2, sehingga Anda dapat mewujudkan ide Anda lebih cepat dari sebelumnya, dan Layar ASUS OLED NanoEdge 16 inci hingga 3.2K 120Hz3 akan memanjakan mata Anda dengan warna yang cerah dan akurat. Untuk kontrol yang tepat dan intuitif dari alat kreatif Anda, ada ASUS DialPad eksklusif. Anda dapat berkreasi dalam ketenangan yang senyap berkat kipas ganda, sistem pendingin berventilasi empat, dan baterai 90 Wh berkapasitas tinggi memberikan daya yang andal dan dapat diandalkan untuk pembuatan konten, di mana pun Anda berada. Berikan kreativitas Anda kekuatan yang layak dengan Vivobook Pro 16X OLED!',
        ]);
        Barang::create([
            'namaBarang' => 'Lenovo Ideapad Slim 3',
            'harga' => 7500000,
            'stok' => 10,
            'sistem' => 'Windows 11 | Windows 10',
            'prosesor' => '11th Gen Intel®Core™ i7-1165G7 processor',
            'memory' => '8 GB / 512 GB, 16 GB / 512 GB',
            'photo' => 'lenovo.webp',
            'ulasan' => 'Dibuat dari logam anodized sandblasted dalam Slate Grey klasik atau Dark Moss yang canggih, tepian Yoga 7i yang dibulatkan secara halus dirancang untuk terasa nyaman di tangan Anda. Engsel 360 derajat menawarkan stabilitas saat Anda beralih dari mode tablet ke laptop dan sebaliknya. Detail yang cermat mencakup rana privasi webcam dan keyboard yang serasi dengan warna dengan lampu latar.'
        ]);
        Barang::create([
            'namaBarang' => 'Acer Nitro 5',
            'harga' => 15000000,
            'stok' => 20,
            'sistem' => 'Windows 11 | Windows 10',
            'prosesor' => '11th Gen Intel®Core™ i7-1165G7 processor',
            'memory' => '8 GB / 512 GB, 16 GB / 512 GB',
            'photo' => 'Acer.webp',
            'ulasan' => 'Kuasai dunia game dengan kombinasi kekuatan prosesor Intel® Core™ i7 Generasi ke-121 dan GPU hingga NVIDIA® GeForce RTX™ 30 Series (dioptimalkan sepenuhnya untuk MGP maksimum). Konfigurasikan laptop Anda untuk mencapai kecepatan tinggi dan penyimpanan masif dengan dua slot M.2 PCIe GEN 4 dan RAM DDR4 3200 hingga 32 GB.'
        ]);
        Barang::create([
            'namaBarang' => 'Dell Vostro',
            'harga' => 10500000,
            'stok' => 30,
            'sistem' => 'Windows 11 | Windows 10',
            'prosesor' => '11th Gen Intel®Core™ i7-1165G7 processor',
            'memory' => '8 GB / 512 GB, 16 GB / 512 GB',
            'photo' => 'Dell.webp',
            'ulasan' => 'Master productivity with essential features including state-of-the-art processors to ensure faster performance; anti-glare displays for easy viewing; multiple ports, including legacy ports, for easily connecting to all of your devices; built-in HD webcam and Waves MaxxAudio® Pro that reduces background noise and boosts audio clarity; and high-speed Gigabit Ethernet all packed in a professional, thin and light design for easy portability.'
        ]);
    }
}
