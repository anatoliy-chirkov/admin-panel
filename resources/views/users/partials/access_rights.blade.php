<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Please change access rights</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.update.access_rights') }}">
                    @csrf

                    <input id="user_id" name="id" value="" hidden>

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <div class="col-md-6">
                            <input id="name" class="form-control" name="name" value="{{ old('name') }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
                        <div class="col-md-6">
                            <input id="email" class="form-control" name="name" value="{{ old('email') }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="access_rights" class="col-sm-4 col-form-label text-md-right">{{ __('Access Rights') }}</label>
                        <div class="col-md-6">
                            <select name="access_rights" class="form-control" autofocus>
                                @foreach (\App\Enums\AccessRights::NAMES as $id => $name)
                                    <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-submit">Save</button>
            </div>
        </div>
    </div>
</div>
