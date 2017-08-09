@if(isset($message))
    {{$message}}
@endif

<form action="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Name:
    <input type="text" name="name">
    <input type="submit" value="create">
</form>