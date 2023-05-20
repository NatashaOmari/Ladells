<x-home-master>
  @section('content')
  <div id="content" class="col-md-10 split">
    <!--content-wrapper  -->
    <div class="content-wrapper">
      <!--divider-top  -->
      <div class="divider-top">
        <!--header-info  -->
        <div class="header-info col-md-12">
          <!--inside-wrapper  -->
          <div class="inside-wrapper container">
            <!-- Heading -->
            <h1>Add a Recipe</h1>

          </div>
          <!--/inside-wrapper  -->
        </div>
        <!--/header-info  -->
        <!-- image gradient overlay-->
        <div class="gradient-overlay"></div>
      </div>
      <!-- /divider-top -->
      <div class="container">
        <form action="{{route('option')}}" method="post">
          @csrf
          <div class="form-check">
            <input class="form-check-input" type="radio" name="option" id="birthday" value="birthday">
            <label class="form-check-label" for="birthday">
              Birthday Cake
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="option" id="graduation" value="graduation">
            <label class="form-check-label" for="graduation">
              Graduation Cake
            </label>
          </div> 
          
          <div class="form-check">
            <input class="form-check-input" type="radio" name="option" id="allevents" value="allevents">
            <label class="form-check-label" for="allevents">
              All events Cake
            </label>
          </div>  
          <div class="form-check">
            <input class="form-check-input" type="radio" name="option" id="wedding" value="wedding">
            <label class="form-check-label" for="wedding">
              Wedding Cake
            </label>
          </div>
          <button class="btn btn-success" type="submit">Add Recipe</button>
        </form>
      </div>

      @endsection
</x-home-master>