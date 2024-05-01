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
        background: #190202 !important;
        color: white !important;
    }
     select option {
        background-color: #361D1D !important;
        color: white!important;
    }
</style>
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">

                
                    <h4><i class="fas fa"></i> Setting</h4>
                    
                    <style> 
                        .borderless td, .borderless th {
                            border: none;
                        }
                      </style>
                    <div class="table-responsive">
                        <table class="table table-md borderless">
                            <thead>
                            <tr style="background: #361D1D;">
                                <th scope="col" style="text-align: center;width: 6%">No.</th>
                                <th scope="col">Nama Program</th>
                                <th scope="col">Logo Brand</th>
                                <th scope="col">Logo Program</th>
                                <th scope="col">Logo Stempel</th>
                                <th scope="col">Background FE</th>
                                <th scope="col" style="width: 15%;text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                            <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->nama_program }}</td>
                                    <td><img src="{{ $data->brand }}" width="200px"></td>
                                    <td><img src="{{ $data->program }}" width="200px"></td>
                                    <td><img src="{{ $data->stampel }}" width="200px"></td>
                                    <td><img src="{{ $data->background_fe }}" width="200px"></td>
                                        
                                    <td class="text-center">
                                            <a href="{{ route('admin.setting.edit', $data->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fa fa-pencil-alt"></i>
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
                        url: "/admin/setting/"+id,
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