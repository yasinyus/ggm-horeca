@extends('layouts.admin')

@section('content')
<style>
     input{
        background: #361D1D !important;
        color: white !important;
    }
     select option {
        background-color: #361D1D !important;
        color: white!important;
    }
</style>
<div class="main-content" style="background: #190202;">
    <section class="section" style="margin:30px">
            <h3>Merchandise / Edit</h3>
            <div class="card" style="padding:20px; background:#361D1D">
      

                    <form action="{{ route('admin.merch.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">Nama Merchandise</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                </div>
                                <div class="form-group">
                                    <label style="color:#fff">Nilai Redeem</label>
                                    <input type="text" class="form-control" name="value" value="{{ $data->value }}">
                                </div>
                                <div class="form-group">
                                    <label style="color:#fff">Status</label>
                                    <select name="status" class="form-control" id="">
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
                                        <input type="file" name="photo" class="form-control" >
                                    </div>
                                </div>
                            </div>
                           </div>
                            
    
    
    
                            <div class="row">
                                <div class="col-md-6">
                                   
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning mr-1 btn-submit float-right" type="submit">SIMPAN</button>
                                </div>
                            </div>

                        

                    </form>
          
        </div>
        </div>
    </section>
</div>
@endsection