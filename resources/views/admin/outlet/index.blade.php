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
    input[type="number"]{
        background: #c5c3c3 !important;
        color: rgb(17, 2, 2) !important;
        border: #fff;
    }
     select option {
        background-color: #361D1D !important;
        color: white!important;
    }
</style>
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">

                
                    <h4><i class="fas fa"></i>Outlet</h4>
                    @if(auth()->user()->roles == 'ADMIN')
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('admin.outlet.index') }}" method="GET">
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
                                <a href="{{ route('admin.outlet.create') }}" class="btn btn-warning" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> ADD NEW</a>
                            </div>
                        {{-- @endcan --}}
                        </div>
                    </div>
                    @endif
                    <style> 
                        .borderless td, .borderless th {
                            border: none;
                        }
                      </style>
                    <div class="table-responsive">
                        <table class="table table-md borderless">
                            <thead>
                            <tr style="background: #361D1D;">
                                <th scope="col" style="text-align: center;width: 6%;">NO.</th>
                                <th scope="col" >Area AO</th>
                                <th scope="col">Outlet</th>
                                <th scope="col">Area</th>
                                <th scope="col">Transaction</th>
                                <th scope="col">Redeem</th>
                                <th scope="col" style="width: 15%;text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                                <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <th scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</th>
                                    <td>{{ $data->wo }}</td>
                                    <td>{{ $data->outlet }}</td>
                                    <td>{{ $data->tipe }}</td>
                                    <td>{{ $data->transaction }}</td>
                                    <td>{{ $data->reedem }}</td> 
                                        
                                    <td class="text-center">
                                        @if(auth()->user()->roles == 'ADMIN')
                                            <a href="{{ route('admin.outlet.edit', $data->edit_id) }}" class="btn btn-sm btn-primary" title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                       
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $data->edit_id }}" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif

                                            <a href="" class="btn btn-sm btn-warning" title="View" data-toggle="modal" data-target="#exampleModal{{ $data->edit_id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-success" title="Merchandise" data-toggle="modal" data-target="#merchandise{{ $data->edit_id }}">
                                                <i class="fa fa-star"></i>
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
     <div class="modal fade" id="exampleModal{{ $data->edit_id }}" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#190202">QR Code</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    {!!  QrCode::size(300)->generate( $data->unicode )."<h1 style='color:black'>".$data->outlet."</h1>" !!} <br>
                </div>
            </div>
            <div class="modal-footer">
            <input type="text" class="form-control" id="myInputLink{{ $data->edit_id }}" value="{{ url('/') }}?id={{ $data->unicode }}">
            <script>
                function copyLink{{ $data->edit_id }}() {
                    var copyText = document.getElementById("myInputLink{{ $data->edit_id }}");
                    copyText.select();
                    copyText.setSelectionRange(0, 99999); 
                    navigator.clipboard.writeText(copyText.value);
                    alert("Copied the text: " + copyText.value);
                }
            </script>
            @php
                $qr = base64_encode(QrCode::format('png')->size(300)->backgroundColor(255, 255, 255)->color(0, 0, 0)->margin(3)->generate($data->unicode).$data->outlet);
            @endphp
            <a class="btn btn-danger" onclick="copyLink{{ $data->edit_id }}()">Copy Link</a>
            <a href="data:image/png;base64, {!! $qr !!}  " class="btn btn-primary" download="GGFI_QR_{{ $data->outlet }}.png">Download</a>
            </div>
        </div>
        </div>
    </div>
@endforeach



@foreach ($datas as $no => $data)
@if($data->is_stock == 1)
     <!-- Modal1 -->
     <div class="modal fade" id="merchandise{{ $data->edit_id }}" tabindex="1000" role="dialog" aria-labelledby="test" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="test" style="color:#190202">Ubah Stok Merchandise</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('admin.outlet.addstock') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="outlet_ids" value="{{ $data->edit_id }}">
            <div class="modal-body">
                <div class="row">
                    @csrf
                    <?php $no = 1; ?>
                    
                    @foreach ($merch_stok as $no => $item)
                    @if($item->outlet_id == $data->edit_id)
                    <div class="col-md-3">
                        <img src="{{ $item->photo }}" width="160px" height="150px">
                        <div class="row input-group mb-5">
                            <div class="col-6">
                                <p style="color:black">{{ $item->name }}</p>
                            </div>
                            <div class="col-6">

                                 {{-- <input type="hidden" value="{{ $data->id }}" name="addMoreFiles[{{ $no }}][outlet_id]"> --}}
                                 <input type="hidden" value="{{ $item->merchandise_id }}" name="addMoreFiles[{{ $no }}][merchandise_id]">
                                 <input type="number" style="width:50px" value="{{ $item->jumlah_stock }}" placeholder="0" name="addMoreFiles[{{ $no }}][jumlah_stock]">
                            </div>
                        </div>
                    </div>
                    @else

                    @endif
                    <?php $no++ ?>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Simpan</button>
            </div>
        </form>
        </div>
        </div>
    </div>
@else
     <!-- Modal2 -->
     <div class="modal fade" id="merchandise{{ $data->edit_id }}" tabindex="1000" role="dialog" aria-labelledby="test" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="test" style="color:#190202">Tambahkan Stok Merchandise</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('admin.outlet.addstock') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="outlet_ids" value="{{ $data->edit_id }}">
            <div class="modal-body">
                <div class="row">
                    @csrf
                    <?php $no = 1; ?>
                    @foreach ($merch as $no => $item)
                    <div class="col-md-3">
                        <img src="{{ $item->photo }}" width="160px" height="150px">
                        <div class="row input-group mb-5">
                            <div class="col-6">
                                <p style="color:black">{{ $item->name }}</p>
                            </div>
                            <div class="col-6">

                                 <input type="hidden" value="{{ $data->edit_id }}" name="addMoreFiles[{{ $no }}][outlet_id]">
                                 <input type="hidden" value="{{ $item->id }}" name="addMoreFiles[{{ $no }}][merchandise_id]">
                                 <input type="number" style="width:50px" placeholder="0" name="addMoreFiles[{{ $no }}][jumlah_stock]">
                            </div>
                        </div>
                    </div>
                    <?php $no++ ?>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Simpan</button>
            </div>
        </form>
        </div>
        </div>
    </div>

@endif
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
                        url: "/admin/outlet/"+id,
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