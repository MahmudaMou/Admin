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
                <div class="card-body">
                    <div class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        categories
                      </th>
                    </thead>
                        <tbody>
                        @foreach($category as $cat)
                      
                        
                     <th> {{$cat->ID}}</th>
                    <th>{{$cat->catagoty_name}}</th>
                    
                    
                    
                    @endforeach

                        </tbody>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @yield('content')