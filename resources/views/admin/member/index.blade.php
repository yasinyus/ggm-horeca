@extends('layouts.admin')

@section('content')
<style>
     th {
        color:#DECE88 !important;
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
<div class="main-content" style="background: #190202;">
    <section class="section" style="margin:30px">

                
                    <h4><i class="fas fa"></i> Team</h4>
        
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('admin.team.index') }}" method="GET">
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
                                <a href="{{ route('admin.team.create') }}" class="btn btn-warning" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> ADD NEW</a>
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
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">Team Name</th>
                                <th scope="col">Team Member</th>
                                <th scope="col">Status</th>
                                <th scope="col" style="width: 15%;text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datas as $no => $data)
                            <tr style="background: #48292B">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->team_name }}</td>
                                    <td>{{ $data->team_name }}</td>
                                    <td>{{ $data->status_team }}</td>
                                        
                                    <td class="text-center">
                                            <a href="{{ route('admin.team.edit', $data->id) }}" class="btn btn-sm btn-primary">
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
                        url: "/admin/team/"+id,
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