<?php

namespace App\Http\Controllers;

use App\Http\Requests\MonitorRequest;
use App\Jobs\MonitorCheck;
use App\Models\Monitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MonitorController extends CRUDController
{
    protected string $class = Monitor::class;
    protected string $modelRequest = MonitorRequest::class;

    public function store(Request $_) {
        $request = app($this->modelRequest);

        $monitor = Monitor::create([
            ...$request->all(),
            'creator_id' => auth()->id()
        ]);

        MonitorCheck::dispatch($monitor);

        return $this->ajaxRedirect('monitors.index');
    }

    public function show(Monitor $monitor) {
        return view('monitors.show', [
            'monitor' => $monitor,
        ]);
    }

    public function runNow(Monitor $monitor) {
        MonitorCheck::dispatch($monitor);

        return redirect()->back();
    }
}
