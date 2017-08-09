@if(isset($message))
    {{$message}}
@endif

<form method="post">
    {{csrf_field()}}
    Name: <input name="name" type="text"/> <br/>
    Description: <input name="description" type="text"/> <br/>
    <select name="feature">
        @foreach($features as $feature)
            <option value="{{$feature->id}}">{{$feature->name}}</option>
        @endforeach
    </select><br/>
    <input type="submit" value="Create"/> <br/>
</form>