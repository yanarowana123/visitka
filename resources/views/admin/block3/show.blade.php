@extends('layouts.admin.main')
@section('title',$block3->title)

@section('content')

    <table class="table table-bordered">
        <tbody>
        <tr>
            <th>Описание</th>
            <td>{{$block3->description}}</td>
        </tr>
        <tr>
            <th>Активный</th>
            <td>{{$block3->isActive()}}</td>
        </tr>
        <tr>
            <th>Порядок</th>
            <td>{{$block3->sn}}</td>
        </tr>
        <tr>
            <th>Картинка</th>
            <td>{{$block3->getImage()}}</td>
        </tr>
        <tr>
            <th>Обновлено</th>
            <td>{{$block3->updated_at}}</td>
        </tr>
        </tbody>

    </table>

@endsection
