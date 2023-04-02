
<div class="form-group">
    <lable>
        {{$label}}
    </lable>
    <input type="{{$type}}" name="{{$name}}" class="form-control" value="{{$value}}">
    <span class="text-danger">
    @error('$name')
        {{message}}
        @enderror
 </span>
</div>

