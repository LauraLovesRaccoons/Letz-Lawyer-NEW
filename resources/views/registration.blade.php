@extends('Layout')
@section('title','Registration')
@section('content')
    <div class="container">
        <form class="ms-auto me-auto mt-3-auto" style="width:500px">

            <div class="mb-3">
              <label class="form-label">Full name</label>
              <input type="email" class="form-control" name="name">
              <div id="emailHelp" class="form-text" name="">We'll never share your email with anyone else.</div>
            </div>

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