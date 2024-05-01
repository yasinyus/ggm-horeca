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
            <h3>Team / Add New Member</h3>

            <div class="card" style="padding:20px; background:#361D1D">
      

                    <form action="{{ route('admin.member.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4>Add New Member</h4>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color:#DECE88">Member Name</label>
                                    <input type="text" name="member_name" value="{{ old('member') }}" placeholder="Masukkan Member Name"
                                        class="form-control @error('member') is-invalid @enderror">
                                    <input type="hidden" value="{{ $id_team }}" name="team_id">
                                    @error('member')
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
                                <button class="btn btn-warning mr-1 btn-submit float-right" type="submit">SIMPAN</button>
                            </div>
                        </div>

                        

                    </form>
          
        </div>
    </section>
</div>
@endsection