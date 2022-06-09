@if($message = Session::get('succes') )
    <div class="alert alert-success">
        <button type="button" class="close">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('error') )
    <div class="alert alert-danger">
        <button type="button" class="close">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('warning') )
    <div class="alert alert-warning">
        <button type="button" class="close">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('info') )
    <div class="alert alert-info">
        <button type="button" class="close">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close">x</button>
        Check the following errors :(
    </div>
@endif
