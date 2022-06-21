<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First degree equation</title>
    <link rel="stylesheet" href="/assets/css/ptb1.sass">
</head>
<body>
    {{-- <form action="{{route('ptb1.post')}}" method="POST"> --}}
      <form action="ptb1" method="POST">
        <div class="segment">
          <h1>Giải phương trình bậc 1</h1>
          <h4>Nhập các tham số của phương trình ax + b = 0</h4>
        </div>
        @csrf
        
        <label for=""> a =</label>
        <label>
          <input type="text" placeholder="a" name="a" value="{{isset($a)?$a:''}}"/>
        </label>
        <br>
        {{$errors->first('a')}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif --}}
        <br>
        <label for="">b =</label>
        <label>
          <input type="text" placeholder="b" name="b" value="{{isset($b)?$b:''}}"/>
        </label>
        <br>
        {{$errors->first('b')}}
        <br>
        <button class="red" type="submit"><i class="icon ion-md-lock"></i>Giải</button>
        <br>
        <br>
        <div class="input-group">
          <label>
            <input type="text" placeholder="Kết quả" name="ketQua" value="{{isset($kq)?$kq:''}}"/>
          </label>
        </div>
        
      </form>
</body>
</html>