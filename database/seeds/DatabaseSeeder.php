<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /////////////////////////////////////
        // Seed User
        DB::table('users')->insert([
            'name' => 'Jawaid',
            'email' => 'mjawaid@gmail.com',
            'password' => bcrypt('jawaid')
        ]);

        /////////////////////////////////////
        // Seed Locations
        DB::table('locations')->insert([
            'name' => 'Expo Center',
            'latitude' => '24.9015813',
            'longitude' => '67.0736155',
            'address' => 'Gulshan, Karachi'
        ]);

        DB::table('locations')->insert([
            'name' => 'Pearl Continental',
            'latitude' => '24.8473421',
            'longitude' => '67.0234113',
            'address' => 'Saddar, Karachi'
        ]);

        DB::table('locations')->insert([
            'name' => 'Federation House',
            'latitude' => '24.8147692',
            'longitude' => '67.0240567',
            'address' => 'Clifton, Karachi'
        ]);

        /////////////////////////////////////
        // Seed Companies
        DB::table('companies')->insert([
            'name' => 'Microsoft',
            'logo' => 'microsoft.png',
            'admin' => 'Mike Tang',
            'email' => 'info@microsoft.com',
            'phone' => '1 12 1122112',
            'website' => 'http://www.microsoft.com',
            'facebook' => 'http://www.facebook.com/microsoft',
            'twitter' => '@microsoft',
            'marketing_doc' => 'docs/microsoft.pdf'
        ]);

        DB::table('companies')->insert([
            'name' => 'Apple',
            'logo' => 'apple.png',
            'admin' => 'Tim Tang',
            'email' => 'info@apple.com',
            'phone' => '1 12 1122412',
            'website' => 'http://www.apple.com',
            'facebook' => 'http://www.facebook.com/apple',
            'twitter' => '@apple',
            'marketing_doc' => 'docs/apple.pdf'
        ]);

        DB::table('companies')->insert([
            'name' => 'Google',
            'logo' => 'google.png',
            'admin' => 'Wang Tang',
            'email' => 'info@google.com',
            'phone' => '1 12 1122112',
            'website' => 'http://www.google.com',
            'facebook' => 'http://www.facebook.com/google',
            'twitter' => '@google',
            'marketing_doc' => 'docs/google.pdf'
        ]);

        /////////////////////////////////////
        // Seed events
        // - upcoming
        DB::table('events')->insert([
            'name' => 'IT Expo',
            'location_id' => 2,
            'start_date' => '2017-10-08',
            'end_date' => '2017-10-12'
        ]);

        DB::table('events')->insert([
            'name' => 'Electronics Expo',
            'location_id' => 3,
            'start_date' => '2017-10-13',
            'end_date' => '2017-10-15'
        ]);

        DB::table('events')->insert([
            'name' => 'Industrial Exhibition',
            'location_id' => 1,
            'start_date' => '2017-10-16',
            'end_date' => '2017-10-20'
        ]);

        // - current
        DB::table('events')->insert([
            'name' => 'Electrical Seminar',
            'location_id' => 1,
            'start_date' => '2017-09-07',
            'end_date' => '2017-09-12'
        ]);

        DB::table('events')->insert([
            'name' => 'Leather Expo',
            'location_id' => 3,
            'start_date' => '2017-09-06',
            'end_date' => '2017-09-09'
        ]);

        // - past
        DB::table('events')->insert([
            'name' => 'Fashion Show',
            'location_id' => 2,
            'start_date' => '2017-08-08',
            'end_date' => '2017-08-12'
        ]);

        DB::table('events')->insert([
            'name' => 'Education Seminar',
            'location_id' => 3,
            'start_date' => '2017-07-08',
            'end_date' => '2017-07-12'
        ]);

        /////////////////////////////////////
        // Seed stands
        // - event 1
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 1,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 1,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 1,
            'reserved' => 0,
            'company_id' => 0
        ]);

        // - event 2
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 2,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 2,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 2,
            'reserved' => 0,
            'company_id' => 0
        ]);

        // - event 3
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 3,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 3,
            'reserved' => 0,
            'company_id' => 0
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 3,
            'reserved' => 0,
            'company_id' => 0
        ]);

        // - event 4
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 4,
            'reserved' => 1,
            'company_id' => 1
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 4,
            'reserved' => 1,
            'company_id' => 2
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 4,
            'reserved' => 1,
            'company_id' => 3
        ]);

        // - event 5
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 5,
            'reserved' => 1,
            'company_id' => 2
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 5,
            'reserved' => 1,
            'company_id' => 3
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 5,
            'reserved' => 1,
            'company_id' => 1
        ]);

        // - event 6
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 6,
            'reserved' => 1,
            'company_id' => 3
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 6,
            'reserved' => 1,
            'company_id' => 1
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 6,
            'reserved' => 1,
            'company_id' => 2
        ]);

        // - event 7
        DB::table('stands')->insert([
            'name' => 'Stand Alpha',
            'price' => 300,
            'picture' => 'alpha.png',
            'event_id' => 7,
            'reserved' => 1,
            'company_id' => 3
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Beta',
            'price' => 400,
            'picture' => 'beta.png',
            'event_id' => 7,
            'reserved' => 1,
            'company_id' => 2
        ]);

        DB::table('stands')->insert([
            'name' => 'Stand Gama',
            'price' => 500,
            'picture' => 'gama.png',
            'event_id' => 7,
            'reserved' => 1,
            'company_id' => 1
        ]);
    }
}
