<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class MakeRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-revisor {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do il ruolo di revisore ad un utente';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('id', $this->argument('id'))->first();
        if ($user) {
            $user->is_revisor = true;
            $user->save();
            $this->info('L\'utente è stato reso revisore.');
        } else {
            $this->error('Utente non trovato.');
        }
    }
}
