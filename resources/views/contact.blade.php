@extends('layout.layout')


@section('section')
    <div class="container mt-5">
        <form action="{{url('/contact')}}" class="row g-3" method="post">

            {{-- token  --}}
            @csrf
           
            <div class="col-md-6">
              <label for="validationDefault01" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" id="validationDefault01"  placeholder="Enter name" value="{{old('name')}}">
              <p class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
              </p>
            </div>

            <div class="col-md-6">
              <label for="validationDefault01" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="validationDefault01"  placeholder="Enter email" value="{{old('email')}}">
              <p class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
              </p>
            </div>
           
           
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">City</label>
              <input type="text" class="form-control" name="city" id="validationDefault03"  placeholder="Enter city" value="{{old('name')}}">
              <p class="text-danger">
                @error('city')
                    {{$message}}
                @enderror
              </p>
            </div>
            <div class="col-md-6">
              <label for="validationDefault03" class="form-label">Phone</label>
              <input type="tel" class="form-control" name="phone" id="validationDefault03"  placeholder="Enter city" value="{{old('phone')}}">
              <p class="text-danger">
                @error('phone')
                    {{$message}}
                @enderror
              </p>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="validationDefault03"  placeholder="Enter password">
                <p class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                  </p>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="validationDefault03"  placeholder="Re-enter password">
                <p class="text-danger">
                    @error('cpassword')
                        {{$message}}
                    @enderror
                  </p>
            </div>
       
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
    </div>
@endsection