@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tạo Đội Bóng Mới</h1>
        <form action="{{ route('qlbongda.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tendoibong" class="form-label">Tên Đội Bóng</label>
                <input type="text" class="form-control" id="tendoibong" name="tendoibong" required>
            </div>
            <div class="mb-3">
                <label for="bietdanh" class="form-label">Biệt danh</label>
                <input type="text" class="form-control" id="bietdanh" name="bietdanh">
            </div>
            <div class="mb-3">
                <label for="hinhanh" class="form-label">URL Hình ảnh</label>
                <input type="text" class="form-control" id="hinhanh" name="hinhanh" required>
            </div>
            <div class="mb-3">
                <label for="quocgia" class="form-label">Quốc gia</label>
                <input type="text" class="form-control" id="quocgia" name="quocgia" required>
            </div>
            <div class="mb-3">
                <label for="sannha" class="form-label">Sân Nhà</label>
                <input type="text" class="form-control" id="sannha" name="sannha">
            </div>
            <div class="mb-3">
            <label for="thanhtich" class="form-label">Thành tích</label>
            <textarea class="form-control" id="thanhtich" name="thanhtich"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tạo Đội Bóng</button>
        </form>
    </div>
@endsection