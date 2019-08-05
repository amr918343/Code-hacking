<div class="row">
    <div class="col-xs-5">
        @if(count($errors) > 0)
            <ul class="error-list">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            </ul>
        @endif
    </div>
</div>