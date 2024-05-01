@extends('layouts.admin')

@section('content')
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">
      <h3>User Outlet</h3>
    </section>

    <section class="section" style="margin:30px">
        <form action="{{ route('admin.user.index') }}" method="GET">
            <div class="form-group">
                <div class="input-group mb-3">
                    {{-- @can('users.create') --}}
                        <div class="input-group-prepend">
                            <a href="{{ route('admin.user.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> Add New User</a>
                        </div>
                    {{-- @endcan --}}
                    <input type="text" class="form-control" name="q"
                           placeholder="Search Username Here ....">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH
                        </button>
                    </div>
                </div>
            </div>
        </form>

      <style> 
        .borderless td, .borderless th {
            border: none;
            color: #fff;
            font-size: 14px;
        }
      </style>
      
      <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-md borderless">
                    <thead>
                    <tr style="background: #361D1D;">
                        <th scope="col" style="text-align: center;width: 6%; color: white;">No.</th>
                        <th scope="col" style="color: white;">User Name</th>
                        <th scope="col" style="color: white;">Email</th>
                        <th scope="col" style="color: white;">Outlet</th>
                        <th scope="col" style="width: 15%;text-align: center; color: white;">ACT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $styles = array('even','odd'); ?>
                    @foreach ($users as $no => $user)
                        <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                            <th scope="row" style="text-align: center">{{ ++$no + ($users->currentPage()-1) * $users->perPage() }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->outlet }}</td>
                                
                            <td class="text-center">
                                {{-- @can('users.edit') --}}
                                    <a href="{{ route('admin.user.edit', $user->edit_id) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                {{-- @endcan --}}
                                
                                {{-- @can('users.delete') --}}
                                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $user->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div style="text-align: center">
                    {{$users->links("vendor.pagination.bootstrap-4")}}
                </div>
            </div>
            
          </div>
        </div>
    </section>
</div>
@endsection


<script>
    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "ARE YOU SURE ?",
                text: "WAN'T TO DELETE THIS DATA ?",
                icon: "warning",
                buttons: [
                    'NO',
                    'YES'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/admin/user/"+id,
                        data:   {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'SUCCESS!',
                                    text: 'DATA DELETED!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'FAILED!',
                                    text: 'DELETE FAILED!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
