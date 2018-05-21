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
             
                <h2>
                    <a href="#">{{ $post->title }}</a>
                </h2>

               
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                
                <hr>
                <p>{{ $post->body }}</p>
                <br>
                <div >
                @foreach ($post->comments as $comment)
                <p class="comments"> {{ $comment->body }}</p>

                @endforeach
                </div>
                <form  method ="POST" action="/posts/{{ $post->id }}/store" >
                    {{ csrf_field() }}
                   

                        <div class="form-group">
                        <label for="body">write comment</label>
                        <textarea  id="body" name="body" class="form-control" ></textarea >
                    </div>


                       
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
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