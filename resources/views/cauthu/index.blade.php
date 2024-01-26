@extends('layouts.app')

@section('content')
    <div class="container">
        
        <h1>Cầu Thủ</h1>
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
             <form class="d-flex" method="GET" action="{{ route('cauthu.search') }}">
                <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="btn btn-primary btn-sm" type="submit">Tìm kiếm</button>
            </form>
            <table class="table">
             <thead>


                <tr>
                    <th>#</th>
                    <th>Tên Cầu thủ</th>
                    <th>Hình Ảnh</th>
                    <th>Tuổi</th>
                    <th>Vị Trí</th>
                    <th>Thành tích</th>
                    <th>Câu lạc bộ chủ quản<th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cauthu as $cauthus)
                    <tr>
                        <td>{{ $cauthus->id }}</td>
                        <td>{{ $cauthus->tencauthu }}</td>
                        <td class="image-cell"><img src="{{ $cauthus->hinhanh }}" alt="Team Image" class="img-thumbnail"></td>
                        <td>{{ $cauthus->tuoi }}</td>
                        <td>{{ $cauthus->vitri }}</td>
                        <td>{{ $cauthus->thanhtich }}</td>
                        <td>{{ $cauthus->clb }}</td>
                        <td>
                        <a href="{{ route('cauthu.edit', $cauthus->id) }}" class="btn btn-primary"><span class="material-symbols-outlined">
                                edit
                                </span></a>
                        <form action="{{ route('cauthu.destroy', $cauthus->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><span class="material-symbols-outlined">
                                delete
                                </span></button>
                            </form>
                        <td>

                      
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
        <a href="{{ route('cauthu.create') }}" class="btn btn-success">Thêm Đội Mới</a>
    </div>
@endsection