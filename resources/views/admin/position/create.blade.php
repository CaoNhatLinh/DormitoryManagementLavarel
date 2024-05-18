<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add new positions </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>

                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" action="{{ route('position.create') }}" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Position name</label>
                        <div class="col-sm-10"><input type="text" name="position_name" id="position_name" placeholder="Position name" class="form-control" required>
                            @if ($errors->has('position_name'))
                            <span class="help-block m-b-none">{{ $errors->first('position_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>