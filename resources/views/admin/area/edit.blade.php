@extends('layouts.admin')

@section('content')
<style>
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
            <h3>Area / Edit</h3>
      

                    <form action="{{ route('admin.area.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">Ao Name</label>
                                    <input type="text" name="ao_name" value="{{ old('ao_name', $data->ao_name) }}" placeholder="Masukkan Campaign Name"
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
                                    <input type="text" name="ro" value="{{ old('ro', $data->ro) }}" placeholder="Masukkan Campaign Name"
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
                                    <input type="text" name="wo" value="{{ old('wo', $data->wo) }}" placeholder="Masukkan Campaign Name"
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
                                        <option value="Active" @if($data->status == 'Active') selected @else @endif>Active</option>
                                        <option value="Inactive" @if($data->status == 'Inactive') selected @else @endif>Inactive</option>
                                    </select>
                                   
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
    </section>
</div>
@endsection