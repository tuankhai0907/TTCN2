@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>thêm cầu thủ mới</h1>
        <form action="{{ route('cauthu.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tencauthu" class="form-label">Tên Cầu Thủ</label>
                <input type="text" class="form-control" id="tencauthu" name="tencauthu" required>
            </div>
            <div class="mb-3">
                <label for="hinhanh" class="form-label">Hình ảnh</label>
                <input type="text" class="form-control" id="hinhanh" name="hinhanh">
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi</label>
                <input type="number" class="form-control" id="tuoi" name="tuoi" required>
            </div>
            <div class="mb-3">
                <label for="vitri" class="form-label">Vị trí</label>
                <input type="text" class="form-control" id="vitri" name="vitri" required>
            </div>
            <div class="mb-3">
                <label for="thanhtich" class="form-label">Thành tich</label>
                <textarea class="form-control" id="thanhtich" name="thanhtich"></textarea>
            </div>
            <div class="mb-3">
            <label for="clb" class="form-label">Câu lạc bộ chủ quản</label>
            <input type="text" class="form-control" id="clb" name="clb" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm cầu thủ</button>
        </form>
    </div>
@endsection