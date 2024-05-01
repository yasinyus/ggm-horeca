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
            <h3>Outlet / Edit</h3>
            <div class="card" style="padding:20px; background:#361D1D">
      

                    <form action="{{ route('admin.outlet.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Outlet Name</label>
                                    <input type="text" class="form-control" name="outlet" value="{{ $data->outlet }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">AO</label>
                                    <select name="area_id" class="form-control" id="">
                                        <option value="">Select</option>
                                        @foreach ($area as $item)
                                            <option value="{{ $item->id }}" @if($item->id ==  $data->area_id) selected @else @endif>{{ $item->wo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Tipe AO</label>
                                    <select name="tipe" class="form-control" id="">
                                        <option value="">Select</option>
                                        <option value="Hotel"  @if($data->tipe == 'Hotel') selected @else @endif>Hotel</option>
                                        <option value="Restoran"  @if($data->tipe == 'Restoran') selected @else @endif>Restoran</option>
                                        <option value="Cafe"  @if($data->tipe == 'Cafe') selected @else @endif>Cafe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Program Start Date</label>
                                    <input type="date" class="form-control" name="program_start" value="{{ $data->program_start }}">
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
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Program End Date</label>
                                    <input type="date" class="form-control" name="program_stop" value="{{ $data->program_stop }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold" style="color:#fff">Link</label>
                                    <input type="text" class="form-control" name="link" value="{{ $data->link }}">
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