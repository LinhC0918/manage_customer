@extends('home')
@section('title', 'Danh sách tỉnh thành')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($cities as $key => $city)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $city->name }}</td>
                            <td>{{ count($city->customers) }}</td>
                            <td><a href="{{route('cities.edit', $city->id)}}">sửa</a></td>
                            <td><a href="{{route('cities.destroy', $city->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('cities.create')}}">Thêm mới</a>
            <a class="btn btn-primary" href="{{route('cities.export')}}">Export</a>
        </div>
    </div>
@endsection