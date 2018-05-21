@extends ('master')

@section ('content')

 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                @foreach ($posts as $post)
                <h2>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>

               <p><img src="../upload/{{ $post->url }}" width="300px" height="300px"></p>
 <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>
                <hr> 
                
                <hr>
                <p>{{ $post->body }}</p>
                <a class="btn btn-primary" href="/posts/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                @endforeach





                <form  method ="POST" action="/posts/store" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                        <div class="form-group">
                        <label for="body">body:</label>
                        <textarea  id="body" name="body" class="form-control" ></textarea >
                    </div>


                      <div class="form-group">
                        <label for="url">image:</label>
                        <input type="file"  id="url" name="url">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Post</button>
                    </div>
                    </form>
               
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
@stop