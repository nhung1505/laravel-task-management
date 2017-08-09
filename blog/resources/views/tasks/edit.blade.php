@if(isset($message))
    {{$message}}
@endif

<form method="post">
    {{csrf_field()}}
    Name: <input name="name" type="text" value="{{$task->name}}"/> <br/>
    Description: <input name="description" type="text" value="{{$task->description}}"/> <br/>
    <input type="submit" value="Update"/> <br/>
</form>