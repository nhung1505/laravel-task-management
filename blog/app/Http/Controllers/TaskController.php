<?php
namespace App\Http\Controllers;
use App\Feature;
use App\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function showCreateForm(){
        $features = Feature::all();
        return view("tasks.create", ["features" => $features]);
    }
    public function create(Request $request){
        $name = $request->input("name");
        $description = $request->input("description");
        $task = new Task();
        $task->name = $name;
        $task->description = $description;
        $task->feature_id = $request->input("feature");
        $task->save();
        $message = "Task was created";
        $features = Feature::all();
        return view("tasks.create", ["message" => $message, "features" => $features]);
    }
    public function listAll(){
        $tasks = Task::with("feature")
            ->paginate(20);//Phan trang
        return view("tasks.list", ["tasks" => $tasks]);
    }
    public function showEditForm(Request $request, $id){
        $task = Task::where("id", $id)->first();
        if($task){
            return view("tasks.edit", ["task" => $task]);
        } else {
            return view("errors.404.blade.php");
        }
    }
    public function edit(Request $request, $id){
        $task = Task::where("id", $id)->first();
        if($task){
            $task->name = $request->input("name");
            $task->description = $request->input("description");
            $task->save();
            return view("tasks.edit", ["task" => $task, "message" => "Task was updated"]);
        } else {
            return view("errors.404.blade.php");
        }
    }
}