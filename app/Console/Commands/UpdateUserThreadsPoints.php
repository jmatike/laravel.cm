<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Gamify\Points\ThreadCreated;
use App\Models\Thread;
use Illuminate\Console\Command;

class UpdateUserThreadsPoints extends Command
{
    protected $signature = 'lcm:update-users-threads-points';

    protected $description = 'Update users threads reputation points';

    public function handle(): void
    {
        $this->info('Updating users threads reputations...');

        foreach (Thread::all() as $thread) {
            // @phpstan-ignore-next-line
            givePoint(new ThreadCreated($thread), $thread->author);
        }

        $this->info('All done!');
    }
}
