<?php

namespace Tests\Unit;

use App\Laravue\Models\Classs;
use App\Laravue\Models\Department;
use App\Laravue\Models\DetailAnsweredSurvey;
use App\Laravue\Models\Survey;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class DetailAnsweredSurveyTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /** @test */

    public function detailansweredsurvey_database_has_expected_columns()
    {
        $this->assertTrue(
          Schema::hasColumns('detail_answered_surveys', [
            'id', 'answered_survey_id','option_id','times'
        ]), 1);
    }
    /** @test */
    public function a_detailansweredsurvey_belongs_to_a_answeredsurvey()
    {
        factory(\App\Laravue\Models\User::class)->create();
        factory(\App\Laravue\Models\Department::class)->create();
        factory(\App\Laravue\Models\Quiz::class)->create();
        factory(\App\Laravue\Models\Option::class)->create();
        factory(\App\Laravue\Models\Classs::class)->create();
        factory(\App\Laravue\Models\Survey::class)->create();
        $answeredsurvey = factory(\App\Laravue\Models\AnsweredSurvey::class)->create();
        $detailansweredsurvey = factory(\App\Laravue\Models\DetailAnsweredSurvey::class)->create(['answered_survey_id' => $answeredsurvey->id]);

        //check instance BelongsTo
        $this->assertInstanceOf(\App\Laravue\Models\AnsweredSurvey::class, $detailansweredsurvey->answeredsurvey);
        //check foreignkey is the same or not
        // $this->assertEquals('admin_created', $quizz->user->getForeignKey());
    }
    /** @test */
    public function a_detailansweredsurvey_belongs_to_a_option()
    {
        factory(\App\Laravue\Models\User::class)->create();
        factory(\App\Laravue\Models\Quiz::class)->create();
        factory(\App\Laravue\Models\Option::class)->create();
        factory(\App\Laravue\Models\Department::class)->create();
        factory(\App\Laravue\Models\Classs::class)->create();
        factory(\App\Laravue\Models\Survey::class)->create();
        factory(\App\Laravue\Models\AnsweredSurvey::class)->create();
        $option = factory(\App\Laravue\Models\Option::class)->create();
        $detailansweredsurvey = factory(\App\Laravue\Models\DetailAnsweredSurvey::class)->create(['option_id' => $option->id]);

        // surveys are related to quizzes and is a collection instance.
        $this->assertInstanceOf(\App\Laravue\Models\Option::class, $detailansweredsurvey->option);
        //check foreignkey is the same or not
        $this->assertEquals('option_id', $detailansweredsurvey->option->getForeignKey());
    }
}
