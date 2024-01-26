@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa cầu thủ</h1>
        <form action="{{ route('cauthu.update',$cauthu->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tencauthu" class="form-label">Tên Cầu Thủ</label>
                <input type="text" class="form-control" id="tencauthu" name="tencauthu" value="{{ $cauthu->tencauthu }}"  required>
            </div>
            <div class="mb-3">
                <label for="hinhanh" class="form-label">Hình ảnh</label>
                <input type="text" class="form-control" id="hinhanh" name="hinhanh" value="{{ $cauthu->hinhanh }}">
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi</label>
                <input type="number" class="form-control" id="tuoi" name="tuoi" value="{{ $cauthu->tuoi }}" required>
            </div>
            <div class="mb-3">
                <label for="vitri" class="form-label">Vị trí</label>
                <input type="text" class="form-control" id="vitri" name="vitri" value="{{ $cauthu->vitri }}" required>
            </div>
            <div class="mb-3">
                <label for="thanhtich" class="form-label">Thành tich</label>
                <textarea class="form-control" id="thanhtich" name="thanhtich" value="{{ $cauthu->thanhtich }}"></textarea>
            </div>
            <div class="mb-3">
            <label for="clb" class="form-label">Câu lạc bộ chủ quản</label>
            <input type="text" class="form-control" id="clb" name="clb" value="{{ $cauthu->clb }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm cầu thủ</button>
        </form>
    </div>
@endsection