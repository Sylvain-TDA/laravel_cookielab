<form method="POST" action="#" enctype="multipart/form-data">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title">{{ __('messages.Create Blog Category') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name" class="form-control-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="form-control-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="password" class="form-control-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group col-md-6">
                <label for="password_conformation" class="form-control-label">Confirm Password</label>
                <input type="password" name="password_conformation" class="form-control" id="password_conformation">
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke">
            <button type="submit" class="btn btn-primary">{{ __('messages.Save') }}</button>
        </div>
    </div>
</form>