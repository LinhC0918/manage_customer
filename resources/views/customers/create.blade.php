@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif"
                               name="name" placeholder="Enter name" >
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif"
                               name="email" placeholder="Enter email" required>
                        @if($errors->has('email') )
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tỉnh thành</label>
                        <select class="form-control" name="city_id">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
