<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show database day 2</title>
    <link rel="stylesheet" href="/assets/css/show.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1>Cool {{ $car->model }} car</h1>
            <div class="item item--clip">
                <div class="demo">
                    <img src="/assets/images/{{ $car->image }}" class="has-mask" alt="...">
                </div>
                <div class="text">
                    <h3>Made in {{ $car->make }}</h3>
                    <br /><br />
                    <code class="code--css">
                        <pre>Produc on: {{ $car->produced_on }}</pre>
                    </code>
                </div>
                <button class="unit" type="button"><i class="fa-solid fa-pen-to-square"
                        onclick="window.location = '{{ route('cars.edit', $car->id) }}'"></i></button>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="unit" type="submit" onclick="return confirm('Do you want to delte this car?')">
                        <i class="fa-solid fa-circle-trash"></i></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
