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
            <h1 class="mt-4">Manage Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="uName" value ="{{$cate->uName}}" placeholder="tên của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="uUsername" value ="{{$cate->uUsername}}" placeholder="user name của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Password </label>
                    <input type="text" class="form-control" name="uPassword" value ="{{$cate->uPassword}}" placeholder="password của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="uEmail" value ="{{$cate->uEmail}}" placeholder="Email của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Phone Number  </label>
                    <input type="text" class="form-control" name="uPhoneNumber" value ="{{$cate->uPhoneNumber}}" placeholder="số đt...">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="Address" value ="{{$cate->Address}}" placeholder="địa chỉ ..." >
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="{{route('admin.manageusers')}}" class="btn btn-warning">Back</a>

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