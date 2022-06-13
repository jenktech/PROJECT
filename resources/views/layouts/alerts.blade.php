@if($errors->count() > 0)
<div class="card">
    <div class="card-body p-5 text-centre">
        <ul>
            @foreach ($errors->all() as $error)
            <li><span style="color:rgb(204, 19, 19)">{{$error}}</span></li>
                
            @endforeach
        </ul>
    </div>
</div>
@endif



