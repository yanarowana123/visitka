<div>
    {{--        <label for="title"></label>--}}
    {{--        <input type="text" name="title">--}}
    {{Form::label('title', 'Название')}}
    {{Form::text('title', (isset($block3) ? $block3->title : null),['class'=>'form-control'])}}
    @if($errors->has('title'))
        <div class="invalid-feedback" style="display: block">
            {{$errors->first('title')}}
        </div>
    @endif
</div>
<div>
    {{Form::label('description', 'Описание')}}
    {{Form::textarea('description', (isset($block3) ? $block3->description : null),['class'=>'form-control', 'rows' => 2, 'cols' => 40]) }}
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->first('description')}}
        </div>
    @endif
</div>
<div>
    {{Form::label('image', 'Картинка')}}
    {{Form::file('image')}}
    @if($errors->has('image'))
        <div class="invalid-feedback">
            {{$errors->first('image')}}
        </div>
    @endif
</div>
<div>
    {{Form::label('sn', 'Порядок')}}
    {{Form::number('sn',(isset($block3) ? $block3->sn : null),['min' => '0' ,'class' => 'form-control','onkeypress'=>"return isNumber(event)"])}}
    @if($errors->has('sn'))
        <div class="invalid-feedback">
            {{$errors->first('sn')}}
        </div>
    @endif
</div>
<div>
    {{--        {{Form::label('is_active')}}--}}
    {{__('admin.is_active')}}
    {{Form::checkbox('is_active',(isset($block3) && $block3->is_active==1),
(isset($block3) && $block3->is_active==1)?['checked'=>'checked']:'')}}
    @if($errors->has('is_active'))
        <div class="invalid-feedback">
            {{$errors->first('is_active')}}
        </div>
    @endif
</div>
{{Form::submit('Сохранить')}}


<script>
    function isNumber(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
