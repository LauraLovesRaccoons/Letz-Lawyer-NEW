@extends('Layout')
@section('title','login')
@section('content')


    <div class="container">
      <div class="container">
        <div class="nt-5">
  
          @if($errors->any()) 
            <div class="col-12"> 
              @foreach ($errors->all() as $errer)
                  <div class="alert alert-danger">{{$error}}> </div>
              @endforeach
            </div>
          @endif
      
      
          @if(section()->has('error'))
           <div class="alert alert-danger">{{session('error')}}> </div>
          @endif
  
          @if(section()->has('success'))
          <div class="alert alert-success">{{session('success')}}> </div>
         @endif
      </div>




        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3-auto" style="width:500px">

          @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection