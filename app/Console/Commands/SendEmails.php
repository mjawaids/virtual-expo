<?php

namespace App\Console\Commands;

use App\Analytic;
use App\Stand;
use App\Company;
use App\Mail\VisitorAnalytics;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email analytics to company email address';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Stands info retrieving...');

        // get all the analytics for all stands
        $analytics = Analytic::with('stand')->get();

        foreach($analytics as $a)
        {
            if($a->stand->event->end_date > now())
            {
                $email = $a->stand->company->email;
                $visitors = $a->visits;
                $stand = $a->stand;
                $event = $a->stand->event;

                // send the stats email to company email addresses
                \Mail::to($email)->send(
                    new VisitorAnalytics( $email, $visitors, $stand, $event )
                );
            }
        }

        $this->info('Emails Sent!');
    }
}
