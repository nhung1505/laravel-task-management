@if(isset($message))
    {{$message}}
@endif

<form method="post">
    {{csrf_field()}}
    Name: <input name="name" type="text" value="{{$feature->name}}"/> <br/>
    <input type="submit" value="Update"/> <br/>
</form>