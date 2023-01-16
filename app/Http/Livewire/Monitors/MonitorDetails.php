<?php

namespace App\Http\Livewire\Monitors;

use App\Models\Monitor;
use Livewire\Component;

class MonitorDetails extends Component
{
    public Monitor $monitor;

    public function render()
    {
        $lastPings = $this->monitor->pings()->orderByDesc('sequence')->limit(10)->get();

        return view('monitors.livewire.monitor-details', [
            'lastPings' => $lastPings
        ]);
    }
}
