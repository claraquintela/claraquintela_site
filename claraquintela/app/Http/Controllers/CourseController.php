<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $newCourse = new Course();
        session()->put("cart", ["course", $newCourse]);
        // Log::info($request->url);
        // Log::warning("message");
        // Log::error("error");

        // try {
        //     throw new Exception("");
        // } catch (Exception $e) {

        //     return back()->with("error", "Something went wrong);
        // }
        //On récupère le queryString de la requête donc de l'url. Ex: www.patate.com?tri=xxx&direction=asc
        $tri = $request->query("tri", 'nom');
        $direction = $request->query('direction', 'asc');
        $prixMax = $request->query("prix-max");

        //Query démare une demande au modèle et doit finir avec get()
        $coursesQuery = Course::query();
        $coursesQuery->orderBy($tri, $direction);

        if ($prixMax) {
            $coursesQuery->where("price", "<", $prixMax);
        }

        $courses = $coursesQuery->get();

        return view('artist.course.classes', ["courses" => $courses, "title" => "Classes"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artist.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request) //se não precisar de um validador específico, basta o $request de base mesmo e pronto
    {
        //limpa e valida os campos
        $validate = $request->validated();
        //cria uma nova instância do objeto
        $newCourse = new Course();
        // preencge a insância de course com os dados do formulário devidade validados
        $newCourse->fill($validate);
        //cria a pasta 
        $path = $request->img->store("courses", "public");
        $newCourse->img = $path;
        $newCourse->save();

        return redirect()->route('courses.index')->with("success", "The class was added to the list.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $product = session()->get("cart");
        return view('artist.course.class', ["course" => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        // dd($course);
        return view('artist.course.edit', ["course" => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'price' => 'required|string',
            'category' => 'required|string',
        ]);

        $course->description = $validatedData['description'];
        $course->price = $validatedData['price'];
        $course->name = $validatedData['name'];
        $course->category = $validatedData['category'];

        if ($request->img) {
            $path = $request->img->store("courses", "public");
            $course->img = $path;
        }

        $course->update();

        return redirect()->route('courses.index')->with('success', 'Course updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete(); //Pra tirar de vez da base de dados, usar forceDelete(). Para restaurar, restore().

        return redirect()->route("courses.index")->with("success", "the class was deleted");
    }
}
