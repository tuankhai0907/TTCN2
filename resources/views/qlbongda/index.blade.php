@extends('layouts.app')

@section('content')
    <div class="container">
        
        <h1>Đội bóng</h1>
        <style>
            h1{
                display: flex;
                justify-content: center;
                align-items: center;

                .table{
                    margin-top: 20px;
                }
            }
        </style>
             <form class="d-flex" method="GET" action="{{ route('qlbongda.search') }}">
                <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="btn btn-primary btn-sm" type="submit">Tìm kiếm</button>
            </form>
       
            <table class="table">
             <thead>
                <tr>
                    <th>#</th>
                    <th>Tên Đội Bóng</th>
                    <th>Biệt Danh</th>
                    <th>Hình ảnh</th>
                    <th>Thành tích</th>
                    <th>Quốc gia</th>
                    <th>Sức chứa sân vận động</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($qlbongdas as $qlbongda)
                    <tr>
                        <td>{{ $qlbongda->id }}</td>
                        <td>{{ $qlbongda->tendoibong }}</td>
                        <td>{{ $qlbongda->bietdanh }}</td>
                        <td class="image-cell"><img src="{{ $qlbongda->hinhanh }}" alt="Team Image" class="img-thumbnail"></td>
                        <td>{{ $qlbongda->thanhtich }}</td>
                        <td>{{ $qlbongda->quocgia }}</td>
                        <td>{{ $qlbongda->sannha }}</td>
                        <td>
                            <a href="{{ route('qlbongda.edit', $qlbongda->id) }}" class="btn btn-primary"><span class="material-symbols-outlined">
                                edit
                                </span></a>
                            <form action="{{ route('qlbongda.destroy', $qlbongda->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><span class="material-symbols-outlined">
                                delete
                                </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <style>
                    td.image-cell {
                        max-width: 20px; /* Điều chỉnh kích thước tối đa theo ý muốn */
                        text-align: center; /* Căn giữa hình ảnh trong ô */
                    }

                    td.image-cell img {
                        max-width: 100%;
                        height: auto;
                    }
                </style>
            </tbody>
        </table>
        <a href="{{ route('qlbongda.create') }}" class="btn btn-success">Thêm Đội Mới</a>
    </div>
@endsection