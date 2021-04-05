@extends('layouts.admin.main')
@section('title','Block 3')
@section('content')

    <table class="table table-striped table-bordered" id="datatable">
        <a href="{{route('block3.create')}}" class="btn btn-success mb-2">Добавить</a>
        <thead>
        <tr>
            <td>Порядок</td>
            <td>Название</td>
            <td>Описание</td>
            <td>Картинка</td>
            <td>Статус</td>
        </tr>
        </thead>
        <tbody>
        @forelse($items as $value)
            <tr>
                <td>{{ $value->sn }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td><img src="{{ $value->getImage() }}" alt=""></td>
                <td>{{ $value->isActive() }}</td>
            </tr>
        @empty
            <tr>
                <td>Записей нет</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
