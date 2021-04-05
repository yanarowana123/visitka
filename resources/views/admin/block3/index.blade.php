@extends('layouts.admin.main')
@section('title')Блок 3 @endsection
@section('content')

    <table class="table table-striped table-bordered" id="datatable">
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
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->getImage() }}</td>
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
