<?php
namespace App\Http\Controllers;
use App\Feature;
use App\Task;
use Illuminate\Http\Request;
class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::withCount("tasks")->get();
        return view("features.list", ["features" => $features]);
    }

    public function showTasks(Request $request, $id)
    {
        $feature = Feature::where("id", $id)->first();
        $tasks = Task::where("feature_id", $id)->get();
        return view("features.tasks", ["feature" => $feature, "tasks" => $tasks]);
    }

    public function showCreateForm()
    {
        return view('features.create');
    }

    public function create(Request $request)
    {
        $name = $request->input("name");
        $feature = new Feature();
        $feature->name = $name;
        $feature->save();
        $message = "task was create";
        return view('features.create', ["message" => $message]);
    }

    public function listAll()
    {
        $features = Feature::paginate(20);
        return view('features.list', ["features " => $features]);
    }

    public function showEditFrom(request $request, $id)
    {
        $feature = Feature::where("id", $id)->first();
        if ($feature) {
            return view("features.edit", ["feature" => $feature]);
        } else {
            return view("error.404.blade.php");
        }
    }

    public function edit(request $request, $id)
    {
        $feature  = Feature::where("id", $id)->first();
        if ($feature ) {
            $feature ->name = $request->input("name");
            $feature ->save();
            return view("features.edit", ["feature" => $feature , "message" => "Feature was updated"]);
        } else {
            return view("errors.404.blade.php");
        }
    }
}
