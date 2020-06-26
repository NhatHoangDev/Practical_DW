<form action="{{URL::to('/postForm')}}" method="post">
   @csrf
    {{csrf_field()}}
    <input type="text" name="hoten">
    <input type="text" name="tuoi">
    <input type="submit">
</form>
