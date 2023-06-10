<x-admin-master>
    @section('content')
    @if(session('delMsg'))
    <div class="alert alert-danger">
        {{session('delMsg')}}
    </div>
    @elseif(session('updateMsg'))
    <div class="alert alert-warning">
    {{session('updateMsg')}}
    </div>
    @endif

    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Wedding Cakes Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Baker's Name</th>
                    <th>Cake id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Recipe</th>

                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Baker's Name</th>
                    <th>Cake id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Recipe</th>

                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  @foreach($weddings as $wedding)
                  <tbody>
                    <tr>
                    <td>{{$wedding->user->name}}</td>
                       <td>{{$wedding->id}}</td>
                       <td>{{$wedding->name}}</td> 
                       <td>{{$wedding->image}}</td>
                       <td>{{Str::Limit($wedding->recipe,30,'...')}}</td>
                       <td>
                       
                        <button class="btn btn-info">
                            <a href="{{route('wedding.edit',$wedding->id)}}">UPDATE</a>
                        </button>
                        
                       </td>
                       <td>
                       
                        <form action="{{route('wedding.destroy',$wedding->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                        
                       </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

        </div>

    @endsection
</x-admin-master>