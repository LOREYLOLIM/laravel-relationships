<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Eloquent Relationship</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">One To One Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($phone as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone?->name}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">One To Many Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>
                            @foreach($data->comments as $comment)
                                {{$comment->message}}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">Many To Many Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>
                            @foreach($data->categories as $category)
                                {{$category->name}}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">Many To Many Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Post Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>
                            @foreach($data->posts as $post)
                                {{$post->title}}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">hasMany Through Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Country</th>
                    <th>Total Post</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->posts->count()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center my-3">hasOne Through Relationship</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Mechanic</th>
                    <th>Car model</th>
                    <th>Car Owner</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mechanics as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->car->model}}</td>
                        <td>{{$data->carOwner->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
