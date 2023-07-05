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
              <h6 class="m-0 font-weight-bold text-primary">Graduation Cakes Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Baker's name</th>
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
                    <th>Baker's name</th>
                    <th>Cake id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Recipe</th>

                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  @foreach($graduations as $graduation)
                  <tbody>
                    <tr>
                    <td>{{$graduation->user->name}}</td>
                       <td>{{$graduation->id}}</td>
                       <td>{{$graduation->name}}</td> 
                       <td><img class="img-responsive img-rounded center-block" src="{{ asset('uploads/graduations/'. $graduation->image) }}" height="80px" width="100px" alt=""></td>
                       <td>{{Str::Limit($graduation->recipe,30,'...')}}</td>
                       <td>
                       @can('update', $birthday)
                        <button class="btn btn-info">
                            <a href="{{route('graduation.edit',$graduation->id)}}">UPDATE</a>
                        </button>
                        @endcan
                       </td>
                       <td>
                       
                        <form action="{{route('graduation.destroy',$graduation->id)}}" method="post">
                            @csrf
                            @can('delete', $birthday)
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">DELETE</button>
                            @endcan
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