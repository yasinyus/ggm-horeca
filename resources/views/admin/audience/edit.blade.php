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
            <h3>Audience / Edit</h3>
            <div class="card" style="padding:20px; background:#361D1D">
      

                    <form action="{{ route('admin.audience.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}

                       
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="color:#DECE88">Choose Campaign</label>
                                    <select name="campaign" class="form-control" id="">
                                        <option value="">Select</option>
                                        @foreach ($campaign as $item)
                                            <option value="{{ $item->id }}" @if($item->id ==  $data->campaign_id) selected @else @endif>{{ $item->campaign_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="ucode" value="{{ $data->unicode_audi }}">
                                <input type="hidden" name="play" value="{{ $data->play }}">
                                <div class="form-group">
                                    <label style="color:#DECE88">Choose Venue</label>
                                    <select name="qr_id" class="form-control" id="">
                                        <option value="">Select</option>
                                        @foreach ($qr as $item)
                                            <option value="{{ $item->id }}" @if($item->id ==  $data->qr_id) selected @else @endif>{{ $item->venue }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="color:#DECE88">Status</label>
                                    <select name="status_audience" class="form-control" id="">
                                        <option value="">Select Status</option>
                                        <option value="Active" @if($data->status_audience == 'Active') selected @else @endif>Active</option>
                                        <option value="Inactive" @if($data->status_audience == 'Inactive') selected @else @endif>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <style>
                                .view {
                                    background:#190202;
                                    width:50%;
                                    height: 200px;
                                    border-radius:10px;
                                    border:white solid 1px;
                                    margin-bottom:50px;
                                }
                                .view img {
                                    height: auto;
                                }
                            </style>
                        
                            <div class="col-md-8">
                                <div class="row">
                                    @php
                                    // use \App\Models\Interaction;
                                    $interaction = \App\Models\Interaction::all()->where('unicode_inte', $data->unicode_audi);
                                    @endphp
                                    <table class="" id="dynamicAddRemove">
                                        @foreach ($interaction as $item)
                                        <tr>
                                            <td>
                                                <label for="">Interaction Name</label>
                                                <input value="{{ $item->name }}" type="text" name="addMoreInputFields[0][name]" placeholder="Interaction Name" class="form-control" style="width:400px"/>
                                            </td>
                                            <td>
                                                <label for="">Image/logo (png)</label>
                                                {{-- <div class="view">
                                                    <img src="{{ asset('images/'.$item->image) }}" alt="" width="100%">
                                                </div> --}}
                                                <input type="file" name="addMoreInputFields[0][file]" class="form-control" value="{{ $item->image }}">
                                            </td>
                                            <td><label for="">Action</label><button type="button" class="form-control btn btn-outline-danger remove-input-field">Delete</button></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                        
                                        
                                   
                                        {{-- <div class="col-md-6">
                                            <label style="color:#DECE88">Name</label>
                                            <input type="text" class="form-control" value="{{ $item->name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label style="color:#DECE88">File</label>
                                            <div class="view">
                                                <img src="{{ asset('images/'.$item->image) }}" alt="" width="100%">
                                            </div>
                                        </div> --}}
                                       
                                    </div>
                                    <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-warning float-right mt-5 mb-5">Add New</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><label for="">Interaction Name</label><input type="text" name="addMoreInputFields[' + i +
            '][name]" placeholder="Interaction Name" class="form-control" /></td> <td><label for="">File</label><input type="file" name="addMoreInputFields[' + i +
            '][file]" class="form-control"></td><td><label for="">Action</label><button type="button" class="form-control btn btn-outline-danger remove-input-field">Delete</button</td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection