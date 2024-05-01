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
            <h3>Outlet / Add New</h3>
      <div class="card" style="padding:20px; background:#361D1D">

                    <form action="{{ route('admin.outlet.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <h4>Add New Outlet</h4>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Outlet Name</label>
                                    <input type="text" value="{{ old('outlet') }}" class="form-control" name="outlet" @error('outlet') is-invalid @enderror">
        
                                    @error('outlet')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">AO</label>
                                    <select name="area_id" class="form-control" id="" required>
                                        <option value="">Select Area</option>
                                        @foreach ($area as $item)
                                            <option value="{{ $item->id }}">{{ $item->ao_name }}</option>
                                        @endforeach
                                    </select>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Tipe AO</label>
                                    <select name="tipe" class="form-control" id="" required>
                                        <option value="">Select Type</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Restoran">Restoran</option>
                                        <option value="Cafe">Cafe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Alamat Outlet</label>
                                    <input type="text" value="{{ old('alamat') }}" class="form-control" name="alamat" @error('alamat') is-invalid @enderror">
        
                                    @error('alamat')
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
                                    <label class="font-weight-bold" style="color:#fff">Program start date</label>
                                    <input type="date" value="{{ old('program_start') }}" class="form-control" name="program_start" @error('program_start') is-invalid @enderror">
        
                                    @error('program_start')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Status</label>
                                    <select name="status" class="form-control" id="" required>
                                        <option value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Program end date</label>
                                    <input type="date" value="{{ old('program_Stop') }}" class="form-control" name="program_stop" @error('program_stop') is-invalid @enderror">
        
                                    @error('program_stop')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Link</label>
                                    <input type="text" value="{{ old('link') }}" class="form-control" name="link" @error('link') is-invalid @enderror">
        
                                    @error('link')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
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

     <!-- Modal -->
     <div class="modal fade" id="merchandise" tabindex="1000" role="dialog" aria-labelledby="test" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="test" style="color:#190202">Tambahkan Stok Merchandise</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach ($merch as $no => $data)
                    <div class="col-md-3">
                        <img src="{{ $data->photo }}" width="160px" height="150px">
                        <div class="row input-group mb-5">
                            <div class="col-6">
                                <p style="color:black">{{ $data->name }}</p>
                            </div>
                            <div class="col-6">
                                 <input type="number" style="width:50px" value="0">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Simpan</button>
            </div>
        </div>
        </div>
    </div>

</div>
@endsection