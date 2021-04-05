@extends('layouts.admin.main')
@section('title','Block 3')

@section('content')

    <form method="post"
          action="{{route('block3.store')}}"
          enctype="multipart/form-data">
        @csrf
        <div>
            title
            <input type="text" name="title">
        </div>
        <div>
            descr
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            file
            <input type="file" name="image">
        </div>
        <div>
            sq
            <input type="number" name="sn">
        </div>
        <div>
            is active
            <input type="checkbox" name="is_active">
        </div>
        <input type="submit" value="save">
    </form>

@endsection
