@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa đội bóng</h1>
        <form action="{{ route('qlbongda.update', $qlbongda->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tendoibong" class="form-label">Tên đội bóng</label>
                <input type="text" class="form-control" id="tendoibong" name="tendoibong" value="{{ $qlbongda->tendoibong }}" required>
            </div>
            <div class="mb-3">
                <label for="biet_danh" class="form-label">Biệt danh</label>
                <input type="text" class="form-control" id="bietdanh" name="bietdanh" value="{{ $qlbongda->bietdanh }}">
            </div>
            <div class="mb-3">
                <label for="hinhanh" class="form-label">URL hình ảnh</label>
                <input type="text" class="form-control" id="hinhanh" name="hinhanh" value="{{ $qlbongda->hinhanh }}" required>
            </div>
            <div class="mb-3">
                <label for="quocgia" class="form-label">Quốc gia</label>
                <input type="text" class="form-control" id="quocgia" name="quocgia" value="{{ $qlbongda->quocgia }}" required>
            </div>
            <div class="mb-3">
                <label for="sannha" class="form-label">Sân Nhà</label>
                <input type="text" class="form-control" id="sannha" name="sannha" value="{{ $qlbongda->sannha }}">
            </div>
            <div class="mb-3">
                <label for="thanh_tich" class="form-label">Thành tích</label>
                <textarea class="form-control" id="thanhtich" name="thanhtich">{{ $qlbongda->thanhtich }}</textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Cập nhật đội bóng</button>
        </form>
    </div>
@endsection