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
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px; background:#361D1D; padding:20px">
            <h3>Setting / Edit</h3>
      

                    <form action="{{ route('admin.setting.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#fff">Nama Program</label>
                                    <input type="text" name="nama_program" value="{{ $data->nama_program }}" placeholder="Masukkan Nama Program"
                                        class="form-control @error('nama_program') is-invalid @enderror">
        
                                    @error('nama_program')
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
                                    <img src="{{ $data->brand }}" width="200px"><br>
                                    <label style="color:#fff">Logo Brand</label>
                                    <input type="file" name="brand" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{ $data->program }}" width="200px"><br>
                                    <label style="color:#fff">Logo Program</label>
                                    <input type="file" name="program" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{ $data->stampel }}" width="200px"><br>
                                    <label style="color:#fff">Logo Stempel</label>
                                    <input type="file" name="stampel" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{ $data->background_fe }}" width="200px"><br>
                                    <label style="color:#fff">Background FE</label>
                                    <input type="file" name="fe" class="form-control">
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