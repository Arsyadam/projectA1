
@extends('layouts.main')

@section('body')
<style>
    .grayscale {filter: grayscale(75%);}
    .form-label {
        color:#889E81;
        font-family: 'Comfortaa', sans-serif;
        font-weight: bold;
    }
    div.relative {
      position: relative;
      width: 100%;
      height: 200px;
     
    } 
    
    
    </style>
    
    <div class="card bg-dark text-white " style="border:none;">
        <img src="img/home.jpg" class="card-img grayscale" alt="...">
            <div class="card-img-overlay" >
                
                <div class="container " style="width:65%">
                    <h1 class="	d-none d-lg-block mt-3 w-50">Cari harga transportasi online yang sesuai</h1>
                    <div class="row rounded-3 px-4 py-3 mt-5" style="background-color: #E5E4CC; ">
                        <div class="col-4 d-inline">
                            <label for="exampleInputEmail1" class="form-label">Pickup Location</label>
                            <div class=" mx-0 input-group  mb-3">
                            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button class="btn btn-light border" type="button" id="button-addon2" style="background-color: white;"><i class="fas fa-exchange-alt text-secondary"></i></button>
                            </div>
                        </div>
                        <div class="px-0 col-4">
                            <label for="exampleInputEmail1" class="form-label">Destination Location</label>
                            <input type="email" class="form-control rounded-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="col-2">
                            <label for="exampleInputEmail1" class="form-label">Type</label>
                            <select class="form-select" aria-label="Default select example">
                                
                                <option value="1">Motorcycle</option>
                                <option value="2">Car</option>
                            </select>
                        </div>
                        <div class="pt-4 col-1">
                            <button type="button" class="btn btn-success mt-2">Search</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    
    
@endsection


