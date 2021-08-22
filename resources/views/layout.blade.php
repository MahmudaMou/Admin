<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <div class="container">
    <div class="roe-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <strong>Categories</strong>
                </div>

                <div class="card-header">
                    @foreach( $category as $cat)
                    <a href='/category/{{$cat->id}}'> <p>{{ $cat->catagory_name}}</p></a>
                    @endforeach
                </div>

               
            </div>
        </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <strong>list of posts</strong>

                    </div>
                    <div class="card-body">
                    <table class="table">
                    <tbody>
                    @foreach($galary as $data)
                      
                        
                          <h1>{{$data->title}}</h1>
                        
                        
                        <img src="{{asset('uploads/galary/'.$data->image)}}" alt="image">
                        
                        <div>
                        {{$data->descrepeipn}}
                        </div>
                        
                        
                        @endforeach
                     
                     </tbody>
                  </table>

                    </div>
                </div>
            </div>
    </div>
</div>
        </div>
    </div>
</body>
</html>