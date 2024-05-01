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
        background: #fcf9f9 !important;
        color: rgb(14, 0, 0) !important;
    }
     select option {
        background-color: #361D1D !important;
        color: white!important;
    }
</style>
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">

        @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @elseif($message =  Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @endif
                    <h4><i class="fas fa"></i> Area</h4>
        
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('admin.area.index') }}" method="GET">
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
                                <a href="{{ asset('assets/xlsx/FORM_AREA.xlsx') }}" class="btn btn-danger" style="padding-top: 10px;"><i class="fa fa-download"></i> Download Form</a>
                                <a href="" data-toggle="modal" data-target="#import" class="btn btn-success" style="padding-top: 10px;"><i class="fa fa-file"></i> Import Xls.</a>
                                <a href="{{ route('admin.area.create') }}" class="btn btn-warning" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> ADD NEW</a>
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
                                <th scope="col" >Ao Name</th>
                                <th scope="col">RO</th>
                                <th scope="col">WO</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 15%;text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                            <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->ao_name }}</td>
                                    <td>{{ $data->ro }}</td>
                                    <td>{{ $data->wo }}</td>
                                    <td>{{ $data->status }}</td>
                                        
                                    <td class="text-center">
                                            <a href="{{ route('admin.area.edit', $data->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                       
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $data->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                       
                                    </td>
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

        <!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('import.area') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
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
                        url: "/admin/area/"+id,
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