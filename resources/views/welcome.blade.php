<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center"> Register</h1>
        <form method="POST" action="{{route('register')}}">
          @csrf
        <div class="mb-3">
            <label > <b>  Name</b></label>
            <input type="text" name="name" class="form-control">
            @error('name')
       <div class="alert alert-danger">{{ $message }}</div>
             @enderror


        </div>


        <div class="mb-3">
            <label > <b>  email</b></label>
            <input type="text" name="email" class="form-control">
       <span>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
         @enderror
       </span>

        </div>

        <div class="mb-3">
            <label > <b> address</b></label>
            <input type="text" name="address" class="form-control">

        </div>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}
        
        <span>
            @error('g-recaptcha-response')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </span> <br>


    <div>
      <input type="submit" name="insert" value="Submit" class="btn btn-primary">
    </div>

        </form>
    </div>

    {{-- {!! NoCaptcha::display(['data-theme' => 'dark']) !!} --}}

  </body>
</html>
