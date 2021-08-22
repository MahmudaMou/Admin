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
        <form action="{{route('addimg')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
             <level>category_id</level>
             <input type="text" name="category_id" class="form-control" placeholder="Enter title">
         </div>
         <div class="form-group">
             <level>title</level>
             <input type="text" name="title" class="form-control" placeholder="Enter title">
         </div>
         <div class="form-group">
             <level>descreption</level>
             <input type="text" name="descrepeipn" class="form-control" placeholder="Enter title">
         </div>
         <div class="input-group">
             <div class="custome-file">
             <input type="file" name="image" class="custom-file-input">
             <level class="custom-file-level"></level>
             </div>  
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Save data</button>
    </form>
    </div>
    
</body>
</html>