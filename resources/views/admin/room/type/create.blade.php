
    <div class="tw-mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Tạo loại phòng</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" action="{{ route('roomType.create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="room_type_name">Tên loại phòng</label>
                                <input type="text" id="room_type_name" name="room_type_name" class="form-control">
    
                                @if ($errors->has('room_type_name'))
                                    <span class="tw-text-red-500">{{ $errors->first('room_type_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="room_type_price">Giá tiền</label>
                                <input type="text" id="room_type_price" name="room_type_price" class="form-control">
                                @if ($errors->has('room_type_price'))
                                    <span class="tw-text-red-500">{{ $errors->first('room_type_price') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Tạo loại phòng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
