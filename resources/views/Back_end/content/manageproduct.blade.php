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
                <li class="breadcrumb-item active">Manager Products</li>
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
                                <th>Image</th>
                                <th>Price</th>
                                <th>Price Pro</th>
                                <th>Quantity</th>
                                

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Price Pro</th>
                                <th>Quantity</th>
                               
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $key => $value)
                                <tr>       
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->pName}}</td>              
                                    <td>{{ $value->pDescription}}</td>
                                    <td><img src="img/{{ $value->pImage}}" style ="width: 100px;"></td>                 
                                    <td>{{ $value->pPrice}}</td>
                                    <td>{{ $value->pPricePro}}</td>
                                    <td>{{ $value->pQuantity}}</td>
                                        

                                    <td>               
                                        <a href="{{asset('admin/product/edit/'.$value->pID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                                        <a href="{{asset('admin/product/delete/'.$value->pID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>               
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{asset('admin/product/create/')}}" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> </span> Add Product </a>
        </div>
    </main>
</div>
{{-- @endsection --}}
</div>

<!-- footer -->
@include('Back_end.layout.footer')

<!-- js -->
@include('Back_end.layout.js')
