<?php

namespace App\Jobs;

use App\Models\DummyLevelsData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Study;
use App\Models\Section;
use App\Models\Level;

class GenerateDummyLevelsData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $school;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($school)
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
        $studies = [];
        $data = [];
        $sections = [];

        $schoolLevels = $this->school->levels();
        $levelsCounter = 0;

        foreach ($schoolLevels as $level) {
            $levelsCounter++;
            foreach ($this->school->section($level) as $section) {
                foreach ($this->school->studyFromSection($section) as $study) {
                    array_push($studies, ['study' => Study::find($study)->load('user'), 'link' => $this->school->study()->where('study_id', $study)->first()->pivot->url]);
                }

                array_push($sections, ['section' => Section::find($section), 'studies' => $studies]);
                $studies = [];
            }
            array_push($data, ['level' => Level::find($level), 'sections' => $sections]);
            $sections = [];
        }

        $this->insert($data);

    }

    public function insert($data)
    {
        $dump = new DummyLevelsData;
        $dump->school_id = $this->school->id;
        $dump->data = json_encode($data);
        $dump->save();
    }
}
