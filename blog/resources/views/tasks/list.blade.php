<p>
    <a href="/tasks/new">Create new task</a>
</p>


{{$tasks->links()}}
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
            <td><a href="/tasks/{{$task->id}}/edit">Edit</a></td>
        </tr>
    @endforeach
</table>