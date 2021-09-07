<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

use App\employee;

class everyDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:sending';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send greetings to employee daily';

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
        $user = employee::all();
        foreach ($user as $all)
        {
         Mail::raw("Good morning to you and have a productive day ahead.", function($message) use ($all)
        {
          $message->from('hr@bric.solutions');
          $message->to($all->email)->subject('Daily Greetings');
           });
           }
         $this->info('Daily message sent');
    }



}
