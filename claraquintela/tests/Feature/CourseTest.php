<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Course;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    // public function setUp(): void
    // {
    //     parent::setUp();
    // }

    // public function tearDown(): void
    // {
    //     parent::tearDown();
    // }


    public function test_course_index_valid(): void
    {
        $response = $this->get(route("courses.index"));
        $response->assertViewHas("courses");
        $response->assertViewHas("title");
        $response->assertStatus(200);
    }

    public function test_index_contains_course(): void
    {
        $response = $this->get(route("courses.index"));
        $coursesData = $response->original->getData()["courses"];
        $this->assertGreaterThan(0, count($coursesData));
    }


    public function test_trier_course_par_prix(): void
    {
        $response = $this->get(route("courses.index", ["tri" => "prix", "direction" => "desc"]));
        $coursesData = $response->original->getData()["courses"];
        $premier = $coursesData->first()->prix;
        $dernier = $coursesData->last()->prix;
        $this->assertGreaterThanOrEqual($premier, $dernier);
    }

    public function test_page_inconnue(): void
    {
        $response = $this->get("/ldifukhjsd");
        $response->assertStatus(404);
    }

    public function test_course_show(): void
    {
        $course = Course::first();
        $response = $this->get(route("courses.show", ["course" => $course->id]));
        $response->assertStatus(200);
    }

    public function test_course_store(): void
    {

        $response = $this->post(route(
            "courses.store",
            [
                "name" => "Visible Mending",
                "price" => "98",
                "category" => "teste",
                "image" => ""
            ]
        ));
        $response->assertStatus(302);
        $response->assertRedirect(route("courses.index"));
        Course::orderByDesc("id")->first()->delete();
    }
}
