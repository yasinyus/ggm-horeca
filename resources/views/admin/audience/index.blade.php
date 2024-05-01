@extends('layouts.admin')

@section('content')
<style>
   .even {
    background-color: #48292B !important;
    }
    .odd {
        background-color:  #361D1D !important;
    }
    th {
        color:#fff !important;
    }
    input{
        background: #361D1D !important;
        color: #fff !important;
    }
     select option {
        background-color: #361D1D !important;
        color: white!important;
    }
</style>
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">

                
                    <h4><i class="fas fa"></i>User</h4>
                    <a href="{{ route('export.user') }}" class="btn btn-success float-right">Download</a>
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('admin.audience.index') }}" method="GET">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                      
                                        <input type="text" class="form-control" name="q"
                                               placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i> SEARCH
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                              {{-- @can('users.create') --}}
                              <div class="input-group-prepend float-right">
                                {{-- <a href="{{ route('admin.audience.create') }}" class="btn btn-success" style="padding-top: 10px;"><i class="fa fa-download"></i> Download</a> --}}
                            </div>
                        {{-- @endcan --}}
                        </div>
                    </div>
                    
                    <style> 
                        .borderless td, .borderless th {
                            border: none;
                        }
                      </style>
                    <div class="table-responsive">
                        <table class="table table-md borderless">
                            <thead>
                            <tr style="background: #361D1D;">
                                <th scope="col" style="text-align: center;width: 6%;">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telp</th>
                                {{-- <th scope="col">Outlet</th> --}}
                                <th scope="col">Transaction</th>
                                <th scope="col">Redeem</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                                <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->no_telp }}</td>
                                    {{-- <td>{{ $data->outlet }}</td> --}}
                                    <td>{{ $data->transaction }}</td> 
                                    <td>{{ $data->redeem }}</td> 
                                        
                                    
                                </tr>
                               
                            @endforeach
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$datas->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                
            </div>
        </div>

    </section>
</div>






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
                        url: "/admin/audience/"+id,
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
@stop