<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-md-6">
        <form action="{{route('wedding.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is invalid @enderror" required autocomplete="name" autofocus>
                        @error('name')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="formFile">{{ __('Image') }}</label>
                        <input class="form-control @error('image') is invalid @enderror" type="file" name="image" id="formFile">
                        @error('image')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">{{ __('Recipe') }}</label>
                        <textarea class="form-control @error('recipe') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="recipe"></textarea>
                        @error('recipe')
                              <div class="alert alert-danger">
                                {{$message}}
                              </div>
                              @enderror
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button class="btn btn-primary" type="submit" name="submit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>