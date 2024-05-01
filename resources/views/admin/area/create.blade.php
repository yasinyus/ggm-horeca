@extends('layouts.admin')

@section('content')
<style>
    input{
        background: #361D1D !important;
        color: white !important;
    }
     select option {
        background-color: #361D1D !important;
        color: #fff!important;
    }
</style>
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">
            <h3>Area / Add New</h3>
      <div class="card" style="padding:20px; background:#361D1D">

                    <form action="{{ route('admin.area.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <h4>Add New Area</h4>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">AO Name</label>
                                    <input type="text" name="ao_name" value="{{ old('ao_name') }}" placeholder="AO Jakarta"
                                        class="form-control @error('ao_name') is-invalid @enderror">
        
                                    @error('ao_name')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">RO</label>
                                    <input type="text" name="ro" value="{{ old('ro') }}" placeholder="Jawa"
                                        class="form-control @error('ro') is-invalid @enderror">
        
                                    @error('ro')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">WO</label>
                                    <input type="text" name="wo" value="{{ old('wo') }}" placeholder="Jakarta"
                                        class="form-control @error('wo') is-invalid @enderror">
        
                                    @error('wo')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-warning mr-1 btn-submit float-right" style="color:black" type="submit">SIMPAN</button>
                            </div>
                        </div>

                        

                    </form>
            </div>
        </div>
    </section>
</div>
@endsection