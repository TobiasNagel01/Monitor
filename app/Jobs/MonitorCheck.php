<?php

namespace App\Jobs;

use App\Models\Monitor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class MonitorCheck implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(protected Monitor $monitor)
    {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $request = Http::get($this->monitor->target);
            $state = $request->status();
        } catch (\Exception $ex) {
            $state = 404;
        }

        $this->monitor->pings()->create([
            'state' => $state,
            'sequence' => $this->monitor->pings->max('sequence') + 1
        ]);
    }
}
