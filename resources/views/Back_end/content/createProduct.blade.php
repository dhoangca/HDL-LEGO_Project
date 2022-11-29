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
            <h1 class="mt-4">Manage Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="pName" placeholder="Tên sản phẩm...">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="pDescription" placeholder="Mô tả sản phẩm ..." >
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="pImage" placeholder="Mô tả sản phẩm ..." >
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="pPrice" placeholder="Giá của sản phẩm ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Quantity  </label>
                    <input type="text" class="form-control" name="pQuantity" placeholder="Số lượng mua...">
                </div>
                <div class="mb-3">
                    @if($countries != null)
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control" name="cID">
        @foreach($countries as $country)
        <option value="{{$country->cID}}">{{$country->cName}}</option>
        @endforeach
      </select>
    </div>
    @endif
                </div>
                <button type="submit" class="btn btn-info"> Add </button>
                <a href="{{route('admin.manageusers')}}" class="btn btn-warning">back</a>

            </form>
        </div>
    </main>
</div>
{{-- @endsection --}}
</div>

<!-- footer -->
@include('Back_end.layout.footer')

<!-- js -->
@include('Back_end.layout.js')