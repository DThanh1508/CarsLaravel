<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .xoi{
            display: flex;
        }
        .trai{
            margin: 10px;
        }
    </style>
</head>
<body>
    <form class="xoi" action="xoi" method="POST">
        @csrf
        <div class="trai">
            <label for="">Nhập a</label>
            <input type="text" name="a" value="{{isset($a)?$a}}">
            <br>
            <br>
            <label for="">Nhập b</label>
            <input type="text" name="b" value="{{isset($b)?$b:''}}">
            <br>
            <br>
            <label for="">Kết quả</label>
            <input type="radio" name="ketQua" value="{{isset($ketQua)?$ketQua:''}}">
        </div>
        <div class="phai">
            <label for="">Cộng</label>
            <input type="radio" name="tinh" value="+">
            <br>
            <br>
            <label for="">Trừ</label>
            <input type="radio" name="tinh" value="-">
            <br>
            <br>
            <label for="">Nhân</label>
            <input type="radio" name="tinh" value="*">
            <br>
            <br>
            <label for="">Chia</label>
            <input type="radio" name="tinh" value="/">
        </div>
    </form>
</body>
</html>