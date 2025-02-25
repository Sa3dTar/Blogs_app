<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BLOGS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Posts</a>
              </li>
              
            
          </div>
        </div>
      </nav>
      <div style="display: flex; justify-content:center;">
        <a href="{{route('posts.create')}}" type="button" class="btn btn-success">create</a>
      </div>


      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">posted by</th>
            <th scope="col">created at</th>
            <th scope="col">title</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)

          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->posted_by}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->title}}</td>
            <td><a href='{{route('posts.show',$post->id)}}' type="button" class="btn btn-primary">view</a> 
              <div >
                <form style="display: inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">delete</button>

                </form>
                
              </div>
               
                <a href="{{route('posts.edit',$post->id)}}" type="button" class="btn btn-info">edit</a>
              </td>
          </tr>
              
          @endforeach
         
         
        </tbody>
      </table>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>