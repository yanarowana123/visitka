@extends('layouts.admin.main')
@section('title','Block 3')
@section('content')

    <table class="table table-striped table-bordered" id="datatable">
        <a href="{{route('admin.block3.create')}}" class="btn btn-success mb-2">Добавить</a>
        <thead>
        <tr>
            <td>Порядок</td>
            <td>Название</td>
            <td>Описание</td>
            <td>Картинка</td>
            <td>Статус</td>
            <td></td>
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
                <td>
                    <div>
                        <a href="{{route('admin.block3.show', $value->id)}}"><i
                                class="fa fa-eye btn btn-sm btn-info"></i></a>
                        <a href="{{route('admin.block3.edit', $value->id)}}"><i
                                class="fa fa-pen btn btn-sm btn-warning"></i></a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td>Записей нет</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
