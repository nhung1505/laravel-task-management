<?php
/**
 * Created by PhpStorm.
 * User: nguyen nhung
 * Date: 8/9/2017
 * Time: 15:39
 */
use Illuminate\Database\Seeder;
use \App\Task;
class TaskTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->name = "Invite people";
        $task->feature_id = 1;
        $task->save();
        $task = new Task();
        $task->name = "Order cake";
        $task->feature_id = 1;
        $task->save();
    }
}