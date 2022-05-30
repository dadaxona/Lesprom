@extends('drektor.dashbord')
@section('title','Parolni ozgartirish')
@section('drektor')
<h2>Паролни озгартириш</h2>     
     
<form action="{{ route('paroldrekror') }}" method="POST">   
    @csrf
    <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 ">
            <input class="form-control inp" type="password" name="password" placeholder="Паролни танланг" value="">
            <span class="text-danger"></span>  
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <input class="form-control in" type="password" name="passwordconfirm" placeholder="Паролни кайтадан киритинг">
            <span class="text-danger"></span>  
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 ">
            <button class="btn btn-success form-control in" type="submit">
                    Янгилаш         
            </button>
        </div>
    </div>
</form>   
@endsection