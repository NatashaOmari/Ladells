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
              <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                    <th>User id</th>
                      <th>Name</th>
                      
                      <th>Email</th>

                      
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>User id</th>
                      <th>Name</th>
                      
                      <th>Email</th>

                      
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  @foreach($users as $user)
                  <tbody>
                    <tr>
                    
                       <td>{{$user->id}}</td>
                       <td>{{$user->name}}</td> 
                       
                       <td>{{$user->email}}</td>
                       
                       
                       <td>
                       
                        <form action="{{route('user.destroy',$user->id)}}" method="post">
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