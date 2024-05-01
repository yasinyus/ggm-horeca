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
            <h3>Team / Add New</h3>
            <div class="card" style="padding:20px; background:#361D1D">
      

                    <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4>Add New Team</h4>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#DECE88">Team Name</label>
                                    <input type="text" name="team_name" value="{{ old('campaign') }}" placeholder="Masukkan Team Name"
                                        class="form-control @error('campaign') is-invalid @enderror">
        
                                    @error('campaign')
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
                                    <label class="font-weight-bold" style="color:#fff">Logo Brand</label>
                                    <input type="file" name="logo_brand" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Logo Program</label>
                                    <input type="file" name="logo_program" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Logo Stempel</label>
                                    <input type="file" name="logo_stempel" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Background FE</label>
                                    <input type="file" name="background_fe" class="form-control">
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