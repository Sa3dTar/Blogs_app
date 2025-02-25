<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <form class="row g-3 needs-validation" action= '{{ route("posts.update",$post->id) }}' method="POST" novalidate>
        @csrf
        @method('PATCH')
        <div class="col-md-4 position-relative">
          <label for="validationTooltip01" class="form-label">name</label>
          <input name="posted_by" type="text" class="form-control" id="validationTooltip01" value="{{$post->posted_by}}" required>
          <div class="valid-tooltip">
            
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltip02" class="form-label">title</label>
          <input name="title" type="text" class="form-control" id="validationTooltip02" value="{{$post->title}}" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltipUsername" class="form-label">paragraph</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            <input name="paragraph" value="{{$post->paragraph}}" type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-tooltip">
              Please choose a unique and valid username.
            </div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <label for="validationTooltip03" class="form-label">id</label>
          <input name="id" type="text" value="{{$post->paragraph}}" class="form-control" id="validationTooltip03" required>
          
          </div>
        </div>
       
        </div>
        
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>