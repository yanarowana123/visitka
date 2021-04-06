@extends('layouts.admin.main')
@section('title','Создать')

@section('content')

    {{Form::open(array('url' => route('admin.block3.store'), 'method'=>'post', 'enctype'=>"multipart/form-data")) }}
    @include('admin.block3._form')
    {{Form::close()}}

@endsection
