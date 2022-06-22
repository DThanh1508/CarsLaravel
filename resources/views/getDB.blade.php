<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get || DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Danh sách xe</h1>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item btn-warning">ID</li>
            <li class="list-group-item btn-warning">Image</li>
            <li class="list-group-item btn btn-warning">Make</li>
            <li class="list-group-item btn btn-warning">Model</li>
            <li class="list-group-item btn btn-warning">Produced_on</li>
            <li class="list-group-item btn btn-warning">
                <div class="btn-group">
                    <a href="#" class="btn active" aria-current="page">Proceed</a>
                </div>
            </li>
          </ul>
          @foreach ($cars as $car)
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item">{{$car->id}}</li>
            <a href="{{route('cars.show',$car->id)}}"><img style="height: 50px; width:50px;" src="/assets/images/{{$car->image}}" class="rounded float-start" alt="..."></a>
            <li class="list-group-item">{{$car->make}}</li>
            <li class="list-group-item">{{$car->model}}</li>
            <li class="list-group-item">{{$car->produced_on}}</li>
            <li class="list-group-item">
                <div class="btn-group">
                    <a href="{{route('cars.edit',$car->id)}}" class="btn btn-primary active" aria-current="page" >Sửa</a>
                    {{-- <a href="{{route('cars.delete', $car->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a> --}}
                    <a href="{{route('cars.delete', $car->id)}}" class="delete btn btn-danger" data-confirm="Are you sure to delete this item?">Delete</a>
                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xóa
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you want to delete?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" onclick="window.location = '/cars/delete/{{ $car->id }}'">Yes, of course!</button>
                            </div>
                        </div>
                        </div>
                    </div> --}}
                </div>
            </li>
          </ul>
          @endforeach
          <strong><a href="{{route('cars.create')}}">Thêm mới xe</a></strong>
    </div>
    <script src="/assets/js/getDB.js"></script>
</body>
</html>