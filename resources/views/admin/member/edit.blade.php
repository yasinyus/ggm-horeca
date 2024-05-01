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
            <h3>Campaign / Add New</h3>
      

                    <form action="{{ route('admin.team.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#DECE88">Campaign Name</label>
                                    <input type="text" name="team_name" value="{{ old('team_name', $data->team_name) }}" placeholder="Masukkan Campaign Name"
                                        class="form-control @error('team_name') is-invalid @enderror">
                                    @error('team_name')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#DECE88">Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="">Select Status</option>
                                        <option value="Active" @if($data->status_team == 'Active') selected @else @endif>Active</option>
                                        <option value="Inactive" @if($data->status_team == 'Inactive') selected @else @endif>Inactive</option>
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