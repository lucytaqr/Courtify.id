<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cabor;
use App\Models\Pertanyaan;
use App\Models\Lapangan;

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

        User::create([
            'name'=>'Admin Courtify',
            'username' => 'admin',
            'email'=>'courtifyadmin@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('123456')
        ]);

        User::create([
            'name'=>'User Courtify',
            'username' => 'user',
            'email'=>'courtifyuser@gmail.com',
            'role'=>'user',
            'password'=>bcrypt('123456')
        ]);

        Cabor::create([
            'name'=>'Futsal',
            'slug'=>'futsal'
        ]);

        Cabor::create([
            'name'=>'Basket',
            'slug'=>'basket'
        ]);

        Cabor::create([
            'name'=>'Voli',
            'slug'=>'voli'
        ]);

        Cabor::create([
            'name'=>'Badminton',
            'slug'=>'badminton'
        ]);

        Cabor::create([
            'name'=>'Golf',
            'slug'=>'golf'
        ]);

        Cabor::create([
            'name'=>'Tennis',
            'slug'=>'tennis'
        ]);

        Pertanyaan::create([
            'name'=>'User Courtify',
            'email'=>'courtifyadmin@gmail.com',
            'phone'=>'081223456789',
            'domisili'=>'Kota Jakarta',
            'pertanyaan' =>'Apa bisa jika saya ingin mendaftarkan venue saya?'
        ]);

        Pertanyaan::create([
            'name'=>'Lucyta Qutsyaning',
            'email'=>'lucytaqr08@gmail.com',
            'phone'=>'082334235300',
            'domisili'=>'Kota Malang',
            'pertanyaan' =>'Apa bisa jika saya ingin menyewa venue?'
        ]);

        Pertanyaan::create([
            'name'=>'Fatma Yuniardini',
            'email'=>'fatmadini@gmail.com',
            'phone'=>'081223456789',
            'domisili'=>'Kota Surabaya',
            'pertanyaan' =>'Apa bisa jika saya ingin membeli venue?'
        ]);

        Pertanyaan::create([
            'name'=>'Chalista Yulia',
            'email'=>'chalistahazizah@gmail.com',
            'phone'=>'082334235300',
            'domisili'=>'Kota Batu',
            'pertanyaan' =>'Apa bisa jika saya ingin menjual venue?'
        ]);

        Pertanyaan::create([
            'name'=>'Dono Martono',
            'email'=>'dono@gmail.com',
            'phone'=>'081223456789',
            'domisili'=>'Kota Blitar',
            'pertanyaan' =>'Apa yang bisa saya bantu?'
        ]);

        Pertanyaan::create([
            'name'=>'Yono Sumarno',
            'email'=>'yono@gmail.com',
            'phone'=>'082334235300',
            'domisili'=>'Kota Saranjana',
            'pertanyaan' =>'Apa yang bisa saya lakukan dalam website ini?'
        ]);

        Lapangan::create([
            'nama' => 'EI-QUDZ Futsal',
            'cabor_id' => '1',
            'slug' => 'el-qudz-futsal',
            'tarif' => '20.000',
            'alamat'=>'Jl. Mayjen Sungkono, Buring, Kec. Kedungkandang, Kota Malang, Jawa Timur 65136',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos quos dolorem nihil modi accusantium, facilis amet enim quia ab, in perferendis vel voluptates non necessitatibus. Ipsam eum adipisci cumque rem impedit earum voluptatem accusantium inventore rerum laudantium enim qui officia, eos assumenda quod a tempore, officiis esse magni sed repellat nihil nesciunt illum! Quos, eum. Accusantium aperiam quo totam soluta fugiat. Delectus sed, distinctio pariatur temporibus saepe minima ullam incidunt a accusantium amet hic eum nam iste animi debitis blanditiis ea repellat sunt. Eum aspernatur quaerat est commodi, harum veniam. Impedit voluptatem tenetur voluptate nisi nobis sint blanditiis aspernatur.'
        ]);

        Lapangan::create([
            'nama'=>'AS Futsal',
            'cabor_id' => '1',
            'slug' => 'as-futsal',
            'tarif' => '30.000',
            'alamat'=>'Jl. Janti Bar., Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam debitis recusandae itaque consequuntur est, atque, cumque autem ratione repellat blanditiis nisi sint. Quis aut, aspernatur officiis id cupiditate quasi tempore, voluptate dolore exercitationem mollitia nostrum consequuntur ullam nulla corrupti ipsum atque voluptatem, quae quod. Itaque deleniti, mollitia illum odio pariatur eum eius tempora voluptatum sit aliquam aspernatur corrupti culpa cum natus perferendis sint enim laborum amet delectus! Fugiat facilis quos rerum, perspiciatis tempora officiis aliquid aspernatur nisi magnam dolorem minima quasi tempore consequuntur culpa nostrum pariatur accusamus provident illo non expedita temporibus adipisci. Deleniti officia voluptate saepe quos aliquam sint.'
        ]);

        Lapangan::create([
            'nama'=>'Oke Futsal',
            'cabor_id' => '1',
            'slug' => 'oke-futsal',
            'tarif' => '40.000',
            'alamat'=>'Jl. Mayjen Sungkono No.81, Buring, Kec. Kedungkandang, Kota Malang, Jawa Timur 65135',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
        ]);

        Lapangan::create([
            'nama'=>'Top Ten Futsal',
            'cabor_id' => '1',
            'slug' => 'top-ten-futsal',
            'tarif' => '50.000',
            'alamat'=>' Komplek Perum Puskopad, Jl. Mayjen Sungkono, Buring, Kec. Kedungkandang, Kota Malang, Jawa Timur 65136',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
        ]);
    
        Lapangan::create([
            'nama' => 'Arena Basket Human',
            'cabor_id' => '2',
            'slug' => 'arena-basket-human',
            'tarif' => '20.000',
            'alamat'=>'Jl. Papa Hijau No.11, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos quos dolorem nihil modi accusantium, facilis amet enim quia ab, in perferendis vel voluptates non necessitatibus. Ipsam eum adipisci cumque rem impedit earum voluptatem accusantium inventore rerum laudantium enim qui officia, eos assumenda quod a tempore, officiis esse magni sed repellat nihil nesciunt illum! Quos, eum. Accusantium aperiam quo totam soluta fugiat. Delectus sed, distinctio pariatur temporibus saepe minima ullam incidunt a accusantium amet hic eum nam iste animi debitis blanditiis ea repellat sunt. Eum aspernatur quaerat est commodi, harum veniam. Impedit voluptatem tenetur voluptate nisi nobis sint blanditiis aspernatur.'
        ]);
            
        Lapangan::create([ 
            'nama'=>'Hindra Jaya Court',
            'cabor_id' => '2',
            'slug' => 'hindra-jaya-court',
            'tarif' => '30.000',
            'alamat'=>'Jl. Candi Agung I No. 6',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam debitis recusandae itaque consequuntur est, atque, cumque autem ratione repellat blanditiis nisi sint. Quis aut, aspernatur officiis id cupiditate quasi tempore, voluptate dolore exercitationem mollitia nostrum consequuntur ullam nulla corrupti ipsum atque voluptatem, quae quod. Itaque deleniti, mollitia illum odio pariatur eum eius tempora voluptatum sit aliquam aspernatur corrupti culpa cum natus perferendis sint enim laborum amet delectus! Fugiat facilis quos rerum, perspiciatis tempora officiis aliquid aspernatur nisi magnam dolorem minima quasi tempore consequuntur culpa nostrum pariatur accusamus provident illo non expedita temporibus adipisci. Deleniti officia voluptate saepe quos aliquam sint.'
        ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Basket Rajabasa',
            'cabor_id' => '2',
            'slug' => 'lapangan-basket-rajabasa',
            'tarif' => '40.000',
            'alamat'=>'Pisang Candi, Sukun, Malang City, East Java 65146',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
        ]);
            
        Lapangan::create([
            'nama' => 'Gelora PORVOT Tunggulwulung',
            'cabor_id' => '3',
            'slug' => 'gelora-porvot-tunggulwulung',
            'tarif' => '20.000',
            'alamat'=>'Tunggulwulung, Lowokwaru, Malang City, East Java 65143',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos quos dolorem nihil modi accusantium, facilis amet enim quia ab, in perferendis vel voluptates non necessitatibus. Ipsam eum adipisci cumque rem impedit earum voluptatem accusantium inventore rerum laudantium enim qui officia, eos assumenda quod a tempore, officiis esse magni sed repellat nihil nesciunt illum! Quos, eum. Accusantium aperiam quo totam soluta fugiat. Delectus sed, distinctio pariatur temporibus saepe minima ullam incidunt a accusantium amet hic eum nam iste animi debitis blanditiis ea repellat sunt. Eum aspernatur quaerat est commodi, harum veniam. Impedit voluptatem tenetur voluptate nisi nobis sint blanditiis aspernatur.'
        ]);
            
        Lapangan::create([
            'nama'=>'RAWISARI',
            'cabor_id' => '3',
            'slug' => 'rawisari',
            'tarif' => '30.000',
            'alamat'=>'Jl. Rawisari, Mulyorejo, Kec. Sukun, Kota Malang, Jawa Timur 65147',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam debitis recusandae itaque consequuntur est, atque, cumque autem ratione repellat blanditiis nisi sint. Quis aut, aspernatur officiis id cupiditate quasi tempore, voluptate dolore exercitationem mollitia nostrum consequuntur ullam nulla corrupti ipsum atque voluptatem, quae quod. Itaque deleniti, mollitia illum odio pariatur eum eius tempora voluptatum sit aliquam aspernatur corrupti culpa cum natus perferendis sint enim laborum amet delectus! Fugiat facilis quos rerum, perspiciatis tempora officiis aliquid aspernatur nisi magnam dolorem minima quasi tempore consequuntur culpa nostrum pariatur accusamus provident illo non expedita temporibus adipisci. Deleniti officia voluptate saepe quos aliquam sint.'
            ]);
            
        Lapangan::create([
            'nama'=>'Badminton Courts Rajabasa',
            'cabor_id' => '4',
            'slug' => 'badminton-courts-rajabasa',
            'tarif' => '20.000',
            'alamat'=>'Jl. Terusan Rajabasa No.5, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
            ]);
            
        Lapangan::create([
            'nama'=>'Gaseba Badminton Court',
            'cabor_id' => '4',
            'slug' => 'gaseba-badminton-court',
            'tarif' => '30.000',
            'alamat'=>' Jl. Indraprasta, Polehan, Kec. Blimbing, Kota Malang, Jawa Timur',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
            ]);
            
        Lapangan::create([
            'nama' => 'Sukun Badminton Court',
            'cabor_id' => '4',
            'slug' => 'sukun-badminton-court',
            'tarif' => '40.000',
            'alamat'=>'Jl. Meliwis Tim., Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65147',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos quos dolorem nihil modi accusantium, facilis amet enim quia ab, in perferendis vel voluptates non necessitatibus. Ipsam eum adipisci cumque rem impedit earum voluptatem accusantium inventore rerum laudantium enim qui officia, eos assumenda quod a tempore, officiis esse magni sed repellat nihil nesciunt illum! Quos, eum. Accusantium aperiam quo totam soluta fugiat. Delectus sed, distinctio pariatur temporibus saepe minima ullam incidunt a accusantium amet hic eum nam iste animi debitis blanditiis ea repellat sunt. Eum aspernatur quaerat est commodi, harum veniam. Impedit voluptatem tenetur voluptate nisi nobis sint blanditiis aspernatur.'
            ]);
            
        Lapangan::create([
            'nama'=>'GOR Kanaya',
            'cabor_id' => '4',
            'slug' => 'gor-kanaya',
            'tarif' => '50.000',
            'alamat'=>'Jl. Werkudoro, Polehan, Kec. Blimbing, Kota Malang, Jawa Timur 65126',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam debitis recusandae itaque consequuntur est, atque, cumque autem ratione repellat blanditiis nisi sint. Quis aut, aspernatur officiis id cupiditate quasi tempore, voluptate dolore exercitationem mollitia nostrum consequuntur ullam nulla corrupti ipsum atque voluptatem, quae quod. Itaque deleniti, mollitia illum odio pariatur eum eius tempora voluptatum sit aliquam aspernatur corrupti culpa cum natus perferendis sint enim laborum amet delectus! Fugiat facilis quos rerum, perspiciatis tempora officiis aliquid aspernatur nisi magnam dolorem minima quasi tempore consequuntur culpa nostrum pariatur accusamus provident illo non expedita temporibus adipisci. Deleniti officia voluptate saepe quos aliquam sint.'
            ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Golf Araya',
            'cabor_id' => '5',
            'slug' => 'lapangan-golf-araya',
            'tarif' => '20.000',
            'alamat'=>'Ulesari, Tirtomoyo, Kec. Pakis, Kabupaten Malang, Jawa Timur 65154',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
            ]);
            
        Lapangan::create([
            'nama'=>'Araya Family Club',
            'cabor_id' => '5',
            'slug' => 'araya-family-club',
            'tarif' => '30.000',
            'alamat'=>'Jl. Raya Golf Utama No.1, Boro Teronggo, Kota Araya, Kec. Pakis, Kota Malang, Jawa Timur 65154',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
            ]);
            
        Lapangan::create([
            'nama'=>'Araya Golf Club House',
            'cabor_id' => '5',
            'slug' => 'araya-golf-club-house',
            'tarif' => '40.000',
            'alamat'=>'Kanigoro, Tirtomoyo, Kec. Pakis, Kabupaten Malang, Jawa Timur 65154',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
            ]);
            
        Lapangan::create([
            'nama'=>'Istana Dieng Club House',
            'cabor_id' => '5',
            'slug' => 'istana-dieng-club-house',
            'tarif' => '50.000',
            'alamat'=>'Perumahan Istana Dieng Jalan Istana Dieng, Raya III, Bandulan, Kec. Sukun, Kota Malang, Jawa Timur 65146',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
            ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Tenis',
            'cabor_id' => '6',
            'slug' => 'lapangan-tenis',
            'tarif' => '20.000',
            'alamat'=>'Lap. Tenis, Jl.Untung Suropati Utara, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur 65126',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
            ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Tenis Permata Jingga',
            'cabor_id' => '6',
            'slug' => 'lapangan-tenis-permata-jingga',
            'tarif' => '30.000',
            'alamat'=>'Jl. Raya Permata Jingga I No.1, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65149',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
            ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Tenis Srikandi',
            'cabor_id' => '6',
            'slug' => 'lapangan-tenis-srikandi',
            'tarif' => '40.000',
            'alamat'=>'Bunulrejo, Blimbing, Malang City, East Java 65123',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et sequi natus laboriosam, officiis sit dolor quibusdam assumenda ab fugiat alias, dolorem tenetur soluta illo esse hic itaque laborum expedita quae consequatur? Fugit eos sed mollitia quaerat sequi nostrum, vitae asperiores. Doloremque non earum commodi iste voluptatem fugiat minus dolore dolorem modi ipsa nisi doloribus libero, sunt aliquid culpa cumque magni at dolor cum reiciendis omnis. Eligendi fugiat non recusandae dolorum modi nulla autem! Repudiandae odio sunt, illo similique tenetur error ad veniam velit corrupti, quia laudantium tempora sit, nostrum mollitia. Sint, sequi ea earum aperiam quaerat rem itaque soluta?'
            ]);
            
        Lapangan::create([
            'nama'=>'Lapangan Tenis Penjara',
            'cabor_id' => '6',
            'slug' => 'lapangan-tenis-penjara',
            'tarif' => '50.000',
            'alamat'=>'Jl. Taman Pemasyarakatan No.17, Bunulrejo, Blimbing, Kota Malang, Jawa Timur 65126, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65126',
            'deskripsi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius iusto fuga incidunt optio fugiat vero sapiente veniam, cumque quidem reprehenderit odit laudantium, ratione iste ducimus libero iure commodi harum, voluptas quos. Explicabo sint dolor repudiandae nihil, accusantium, totam, similique neque possimus labore autem perspiciatis. Delectus similique consequatur odit harum, aperiam maiores. Tempore enim ducimus deserunt in praesentium molestias fugiat aspernatur molestiae placeat culpa quo, numquam, dignissimos, obcaecati mollitia doloremque quae magni nam beatae autem cumque nisi. Exercitationem quam at maxime possimus placeat ipsum officia atque. Debitis labore qui est rem odit aperiam tenetur? Delectus veniam reprehenderit blanditiis ab suscipit officia!'
            ]);
    }
}
