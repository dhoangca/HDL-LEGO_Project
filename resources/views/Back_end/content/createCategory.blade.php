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
            <h1 class="mt-4">Manage Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                <label for="">Category Name </label>
                <input type="text" class="form-control" name="CategoryName" placeholder="tên thể loại...">
                </div>
                <div class="mb-3">
                    <label for="">Category Description</label>
                    <input type="text" class="form-control" name="CategoryDescription" placeholder="mô tả..." >
                </div>
                <button type="submit" class="btn btn-info"> Add </button>
                <a href="{{route('admin.indextablecategory')}}" class="btn btn-warning">back</a>

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