<p>
    {{$feature->name}}
</p>

<table>
    <tr>
        <th>Name</th>
        <th>Feature</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>
        <th></th>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{$task->name}}</td>
            <td>{{$task->feature->name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
            <td><a href="/tasks/{{$task->id}}/edit">Edit</a></td>
        </tr>
    @endforeach
</table>