<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\School;
use App\Models\AlgoliaSchool;

class DeleteFromAlgolia implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $school;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(School $school)
    {
        $this->school = $school;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($dummy = AlgoliaSchool::where('school_id', $this->school->id)->first()){
            $dummy->delete();
        }
    }
}
