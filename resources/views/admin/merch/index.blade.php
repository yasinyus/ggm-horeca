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

                
                    <h4><i class="fas fa"></i>Merchandise</h4>
        
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('admin.merch.index') }}" method="GET">
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
                                <a href="{{ route('admin.merch.create') }}" class="btn btn-warning" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> ADD NEW</a>
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
                                <th scope="col">Merchandise</th>
                                <th scope="col">Foto</th>
                                <th scope="col">All Stock</th>
                                <th scope="col">Redeem</th>
                                <th scope="col">Nilai Tukar</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 15%;text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                                <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td><img src="{{ $data->photo }}" width="160px"></td>
                                    <td>{{ $data->status_filter }}</td> 
                                    <td>{{ $data->status_filter }}</td> 
                                    <td>{{ $data->value }}</td> 
                                    <td>{{ $data->status }}</td>
                                        
                                    <td class="text-center">
                                            <a href="{{ route('admin.merch.edit', $data->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                       
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $data->id }}" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <a href="" class="btn btn-sm btn-warning" title="View" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                           
                                       
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

    </section>
</div>


@foreach ($datas as $no => $data)
     <!-- Modal -->
     <div class="modal fade bd-example-modal-lg" id="exampleModal{{ $data->id }}" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content" style="background: #361D1D !important">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#f7efef">View Merchandise</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:#fff">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                        </div>
                        <div class="form-group">
                            <label style="color:#fff">Nilai Tukar</label>
                            <input type="text" class="form-control" name="value" value="{{ $data->value }}">
                        </div>
                        <div class="form-group">
                            <label style="color:#fff">Status</label>
                            <select name="status_filter" class="form-control" id="">
                                <option value="">Select Status</option>
                                <option value="Active" @if($data->status == 'Active') selected @else @endif>Active</option>
                                <option value="Inactive" @if($data->status == 'Inactive') selected @else @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <style>
                        .view {
                            background:#190202;
                            width:100%;
                            /* height: 200px; */
                            border-radius:10px;
                            border:white solid 1px;
                            margin-bottom:50px;

                        }
                    </style>
                    <input type="hidden" name="gambar44" value="{{ $data->photo }}">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label style="color:#fff">Photo</label>
                                <div class="view">
                                    <img src="{{ $data->photo }}" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
            </div>
        </div>
        </div>
    </div>
@endforeach



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
                        url: "/admin/filter/"+id,
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