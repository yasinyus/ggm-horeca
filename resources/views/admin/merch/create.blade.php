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
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">
            <h3>Merchandise / Add New</h3> <link rel="stylesheet" href="">
      <div class="card" style="padding:20px; background:#361D1D">

                    <form action="{{ route('admin.merch.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <h4>Add New Merchandise</h4>
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color:#fff">Name Merchandise</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label style="color:#fff">Nilai Redeem</label>
                                <input type="text" class="form-control" name="value">
                            </div>
                            
                            <div class="form-group">
                                <label style="color:#fff">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="">Select</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <style>
                            .view {
                                background:#190202;
                                width:100%;
                                height: 200px;
                                border-radius:10px;
                                border:white solid 1px;
                                margin-bottom:50px;

                            }
                        </style>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="color:#fff">Foto</label>
                                    <div class="view">

                                    </div>
                                    <input type="file" name="photo" class="form-control">
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