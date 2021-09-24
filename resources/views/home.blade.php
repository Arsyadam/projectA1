
@extends('layouts.main')

@section('body')
<style>
    
    .centered {
        position: absolute;
        top: 32%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color:#E5E4CC;
    }
    .center {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
    .btn-default {
        margin-top: 33px;
        background-color: white;
        padding: 10px;

    }
    .large {
        width: 15rem;
        height: 3em;
    }
</style>
<div class="center">
    <h1 style="font-size: 5rem">Cari harga transportasi online yang sesuai</h1>
</div>
<div class=" centered px-5 py-3" >
    <div class="container" style="">
    
    <form> 
        <div class="d-flex">
            <div class=" p-0 m-0">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control large rounded-start" id="exampleInputPassword1">
            </div>
            <div class=" pe-4 m-0 ">
               <button class="btn btn-default border-start-0 rounded-end " ><i class="fas fa-exchange-alt"></i></button>
            </div>
            <div class=" p-0 m-0">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control large" id="exampleInputPassword1">
            </div>
        </div>
    </form>
</div>

</div>
<div>
    
    <img src="img/home.jpg" class="d-block w-100 img-fluid" alt="">
    
</div>

@endsection