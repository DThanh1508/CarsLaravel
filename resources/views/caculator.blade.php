<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cacular.css">
    <title>caculator</title>
    <style>
        input{
            color: aliceblue;
        }
    </style>
</head>
<body class="align">

    <div class="grid">
        <form action="caculator" method="POST" class="form login">
            @csrf
            <div class="inputBox">
                <input type="text" name="n1" value="{{isset($a)?$a:''}}">
                <span>First number</span>
            </div>
            {{$errors->first('n1')}}
            <div class="inputBox">
                <input type="radio" name="tinh" value="+">
                <label for="">cong</label>

                <input type="radio" name="tinh" value="-">
                <label for="">tru</label>

                <input type="radio" name="tinh" value="*">
                <label for="">nhan</label>

                <input type="radio" name="tinh" value="/" chia>
                <label for="">chia</label>
            </div>
            
            {{-- <tr>
                <td><select name="op" value="{{isset($cacul)?$cacul:''}}">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
            </tr> --}}
            <div class="inputBox">
                <input type="text" name="n2" value="{{isset($b)?$b:''}}">
                <span>Second number</span>
            </div>
            {{$errors->first('n2')}}
            <div class="form__field">
                <input type="submit" value="Run">
              </div>
            <div class="inputBox">
                <input type="text" name="result" value="{{isset ($result)?$result:''}}">
                <span>Result</span>
            </div>
      
          </form>
</body>
</html>