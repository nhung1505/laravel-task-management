<p>
    <a href="/features/new">Create new feature</a>
</p>


{{$tasks->links()}}
<table>
    <tr>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($features as $feature)
        <tr>
            <td>{{$feature->name}}</td>
            <td>{{$feature->created_at}}</td>
            <td>{{$feature->updated_at}}</td>
            <td><a href="/tasks/{{$feature->id}}/edit">Edit</a></td>
        </tr>
    @endforeach
</table>