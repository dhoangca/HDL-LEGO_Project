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
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manager</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manager Category</li>
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
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $key => $value)
                                <tr>       
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->CategoryName }}</td>              
                                    <td>{{ $value->CategoryDescription}}</td>
                                    <td>               
                                        <a href="{{asset('admin/category/edit/'.$value->CategoryID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                                        <a href="{{asset('admin/category/delete/'.$value->CategoryID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>               
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{asset('admin/category/create/')}}" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> </span> Add Category </a>
        </div>
    </main>
</div>
{{-- @endsection --}}
</div>

<!-- footer -->
@include('Back_end.layout.footer')

<!-- js -->
@include('Back_end.layout.js')
