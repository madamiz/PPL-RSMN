<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Polyclinic;
use App\Models\Inpatient;
use App\Models\Installation;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32zM240 336a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm80 16a16 16 0 1 1 0 32 16 16 0 1 1 0-32zm48-16a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm-16 80a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM240 432a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm-48-48a16 16 0 1 1 0 32 16 16 0 1 1 0-32z"/></svg>',
            'title' => "Poli Kulit dan Kelamin",
            'description' => "Poliklinik Kulit dan Kelamin merupakan poli khusus yang menangani beragam masalah pada kesehatan kulit dan kelamin ",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Rakhma Tri Irfanti, Sp.DV'
        ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg>',
            'title' => "Poli VCT",
            'description' => "Voluntary Counseling and Testing (VCT) merupakan salah satu strategi kesehatan masyarakat yang dilakukan untuk menangani penyebaran HIV/AIDS",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Nur Aeni Mulyaningsih'
        ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H96V32H64zm64 0V480H448V32H128zM512 480c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H480V480h32zM256 176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H320v48c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V288H208c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16h48V176z"/></svg>',
            'title' => "Poli Jiwa",
            'description' => "Poliklinik Jiwa atau Psikiatri menyediakan pelayanan rawat jalan jiwa atau psikiatri dan pelayanan spesialistik lain yang terkait dengan kesehatan jiwa.",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Sih Ayuwatini, Sp. KJ, M. Kes'
        ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>',
            'title' => "Poli Mata",
            'description' => "Poliklinik mata kami berfokus pada penanganan mata manusia dengan melakukan pemeriksaan ,pencegahan terhadap kerusakan, cedera, gangguan pengelihatan dan penyakit mata.",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Kharisma Gita Edhita, Sp.M'
        ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>',
            'title' => "Poli Mata",
            'description' => "Poliklinik mata kami berfokus pada penanganan mata manusia dengan melakukan pemeriksaan ,pencegahan terhadap kerusakan, cedera, gangguan pengelihatan dan penyakit mata.",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Kharisma Gita Edhita, Sp.M'
        ]);

        Polyclinic::create([
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>',
            'title' => "Poli Mata",
            'description' => "Poliklinik mata kami berfokus pada penanganan mata manusia dengan melakukan pemeriksaan ,pencegahan terhadap kerusakan, cedera, gangguan pengelihatan dan penyakit mata.",
            'day' => 'Senin - Sabtu',
            'time' => '08.00 - 11.00 WIB',
            'name' => 'dr. Kharisma Gita Edhita, Sp.M'
        ]);

        Inpatient::create([
            'class' => 'VVIP',
            'bed_total' => '9',
            'filled' => '4',
            'empty' => '5',
            'price' => '500000'
        ]);

        Inpatient::create([
            'class' => 'VIP',
            'bed_total' => '23',
            'filled' => '21',
            'empty' => '2',
            'price' => '380000'
        ]);

        Inpatient::create([
            'class' => 'Kelas 1',
            'bed_total' => '73',
            'filled' => '59',
            'empty' => '14',
            'price' => '230000'
        ]);

        Inpatient::create([
            'class' => 'Kelas 2',
            'bed_total' => '127',
            'filled' => '96',
            'empty' => '31',
            'price' => '160000'
        ]);

        Inpatient::create([
            'class' => 'Kelas 3',
            'bed_total' => '168',
            'filled' => '114',
            'empty' => '54',
            'price' => '95000'
        ]);

        Installation::create([
            'img_path' => 'storage/img/igd.jpg',
            'title' => 'Instalasi Gawat Darurat (IGD)',
            'description' => 'Memberikan pelayanan One Day Care selama 24 jam.',
        ]);

        Installation::create([
            'img_path' => 'storage/img/jenazah.jpg',
            'title' => 'Instalasi Kamar Jenazah',
            'description' => 'Instalasi Kamar Jenazah melayani: Konservasi Jenazah, Pemulasaran Jenazah, Pembalseman Pengawetan Jenazah, Persemayaman/Rumah Duka Persemayaman.',
        ]);

        Installation::create([
            'img_path' => 'storage/img/radiology.jpg',
            'title' => 'Instalasi Radiology',
            'description' => 'Pelayanan untuk melakukan diagnosis menggunakan peralatan X-ray.',
        ]);

        Installation::create([
            'img_path' => 'storage/img/pharmacy.jpg',
            'title' => 'Instalasi Farmasi',
            'description' => 'Memberikan pelayanan kesediaan farmasi untuk obat-obatan bagi pasien.',
        ]);

        Contact::create([
            'address' => 'Sepaku, Kabupaten Penajam Paser Utara, Provinsi Kalimantan Timur',
            'phone' => '0541-21102041',
            'email' => 'rsmedikanusantara@ikn.go.id',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.243037873324!2d116.70625760973533!3d-0.9729865990135261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6c9a9138990fd%3A0x593aee2ae36416b6!2sTitik%20Nol%20IKN%20Nusantara!5e0!3m2!1sid!2sid!4v1704732733344!5m2!1sid!2sid'
        ]);
    }
}
