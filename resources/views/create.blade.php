<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">

    <section class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Add product</h3>
        </div>
        <div class="panel-body">

            <form action="/products" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                </div> <!-- form-group // -->
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="price" id="name" placeholder="Price">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="/showAll"><button type="button" class="btn btn-primary">Show all products</button></a>
                    </div>
                </div> <!-- form-group // -->
            </form>

        </div><!-- panel-body // -->
    </section><!-- panel// -->


</div> <!-- container// -->

</body>

</html>