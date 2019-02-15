<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/axios.js"></script>
</head>

<body>
 <div class="container">
     <table class="table table-striped table-hover table-users">
         <thead>
         <tr>
             <th class="hidden-phone">ID</th>
             <th>Name</th>
             <th>Price</th>
             <th></th>
             <th></th>
         </tr>
         </thead>
         <tbody>
       @foreach($show as $item)
         <tr>
             <td class="hidden-phone">{{$item->id_prod}}</td>
             <td>{{$item->name_prod}}</td>
             <td>{{$item->price}}</td>

                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                 <td>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$item->id_prod}}">
                         Edit
                     </button>
                 </td>

             <form method="post" action="/products/{{$item->id_prod}}">
                 <input type="hidden" name="_method" value="DELETE">
                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                 <input name="id" type="hidden" value=""/>
                 <td>

                     <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="">
                         delete
                     </button>
                 </td>
             </form>
         </tr>
         <div class="modal fade" id="exampleModal-{{$item->id_prod}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit menu</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="panel-body">

                             <form action="products/{{$item->id_prod}}/edit" method="get" class="form-horizontal" role="form">
                                 {{ csrf_field() }}
                                 <div class="form-group">
                                     <label for="name" class="col-sm-3 control-label">Name</label>
                                     <div class="col-sm-9">
                                         <input type="text"  value="{{$item->name_prod}}" class="form-control" name="name" id="name" placeholder="Name">
                                     </div>
                                 </div> <!-- form-group // -->
                                 <div class="form-group">
                                     <label for="name" class="col-sm-3 control-label">Price</label>
                                     <div class="col-sm-9">
                                         <input type="text" value="{{$item->price}}" class="form-control" name="price" id="name" placeholder="Price">
                                     </div>
                                 </div>
                                 <hr>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-primary">Save changes</button>
                                 </div>
                             </form>

                         </div><!-- panel-body // -->
                     </div>

                 </div>
             </div>
         </div>
       @endforeach
         </tbody>
     </table>
     <a href="/products"><button class="btn btn-primary">Add products</button></a>
 </div>



 </body>
</html>