@extends('layouts.admin.main')
@section('title','Редактировать')

@section('content')

    @if($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif


{{Form::open(array('url' => route('admin.block3.update',$block3->id), 'method'=>'put', 'enctype'=>"multipart/form-data")) }}
@include('admin.block3._form',compact('block3'))
{{Form::close()}}

@endsection
