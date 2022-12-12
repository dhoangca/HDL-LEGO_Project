<!-- head --> 
@include('Back_end.layout.head')

<!-- nav --> 
@include('Back_end.layout.nav')

<div id="layoutSidenav">

<!-- sidebar -->
@include('Back_end.layout.sidebar')

{{-- @section('content.') --}}
<div id="layoutSidenav_content">
    <main>
         {{-- <table class="table table-bordered">
            <thead>
                <th width="5%">STT</th>
                <th width="20%">Name</th>
                <th width="20%">Description</th>
            </thead>
            <tbody>
                 @if (!@empty($userList)) 
                @foreach ($categories as $key => $value)
                
                    <tr>       
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->CategoryName }}</td>              
                        <td>{{ $value->CategoryDescription}}</td>
                         <td>               
                            <a href="{{asset('category/edit/'.$value->CategoryID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                            <a href="{{asset('category/create/')}}" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> </span> add</a>
                            <a href="{{asset('category/delete/'.$value->CategoryID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>               
                        </td> 
                    </tr>
                
                @endforeach
                 @else
                    <tr>
                        <td colspan="4"> không có user nào cả</td>
                    </tr>
                @endif 
            </tbody>
        </table>  --}}
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Table Category</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $key => $value)
                                <tr>       
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->CategoryName }}</td>              
                                    <td>{{ $value->CategoryDescription}}</td>
                                    {{-- <td>               
                                        <a href="{{asset('category/edit/'.$value->CategoryID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                                        <a href="{{asset('category/create/')}}" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> </span> add</a>
                                        <a href="{{asset('category/delete/'.$value->CategoryID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>               
                                    </td> --}}
                                </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
{{-- @endsection --}}
</div>

<!-- footer -->
@include('Back_end.layout.footer')

<!-- js -->
@include('Back_end.layout.js')
