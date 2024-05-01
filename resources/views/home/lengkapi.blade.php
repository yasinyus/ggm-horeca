@extends('layouts.home', ['title' => 'Home'])

@section('content')


    <div class="container">
        <div class="row">
            <div class="mt-5 col-12 col-sm-12">

                <div style="padding-top:10px !important; height:800px">

                   
                    <div style="justify-content: center; margin:auto; width:90%">  
                        @if(auth()->user()->jk == NULL)
                        <form method="POST" action="{{ route('aksilengkapi') }}" class="needs-validation "
                            novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="email" style="color: #fff;">Jenis Kelamin</label>
                                <select name="jk" id="" class="form-control">
                                    <option value="laki-laki" @if(auth()->user()->jk == "laki-laki") selected @endif>Laki-laki</option>
                                    <option value="perempuan" @if(auth()->user()->jk == "perempuan") selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir" style="color: #fff;">Tanggal Lahir</label>
                                <input id="tgl_lahir" type="date"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" tabindex="1" min="2006-01-01" max="2007-01-01"  
                                    required>
                                @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Kota / Domisili</label>
                                <input id="kota" type="text"
                                    class="form-control @error('kota') is-invalid @enderror" name="kota"
                                    placeholder="Masukkan kota domisili" value="{{ old('kota') }}" tabindex="1"
                                    required>
                                @error('kota')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Merek Rokok</label>
                                <input id="merek" type="text"
                                    class="form-control @error('merek') is-invalid @enderror" name="merek"
                                    placeholder="Masukkan merek rokok" value="{{ old('merek') }}" tabindex="1"
                                    required>
                                @error('merek')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Pekerjaan</label>
                                <input id="pekerjaan" type="text"
                                    class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan"
                                    placeholder="Masukkan pekerjaan" value="{{ old('pekerjaan') }}" tabindex="1"
                                    required>
                                @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Hoby</label>
                                <input id="hoby" type="text"
                                    class="form-control @error('hoby') is-invalid @enderror" name="hoby"
                                    placeholder="Masukkan hoby" value="{{ old('hoby') }}" tabindex="1"
                                    required>
                                @error('hoby')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-lg btn-block btn-rounded"tabindex="4">
                                    Simpan
                                </button>
                            </div>
                        </form>
                        @else
                        <form method="POST" action="{{ route('aksilengkapi') }}" class="needs-validation "
                            novalidate="">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="email" style="color: #fff;">Jenis Kelamin</label>
                                <select name="jk" id="" class="form-control input-rounded">
                                    <option value="laki-laki" @if(auth()->user()->jk == "laki-laki") selected @endif>Laki-laki</option>
                                    <option value="perempuan" @if(auth()->user()->jk == "perempuan") selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir" style="color: #fff;">Tanggal Lahir</label>
                                <input id="tgl_lahir" type="date"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror input-rounded" name="tgl_lahir" value="{{ auth()->user()->tgl_lahir }}" tabindex="1"
                                    required>
                                @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Kota / Domisili</label>
                                <input id="kota" type="text"
                                    class="form-control @error('kota') is-invalid @enderror input-rounded" name="kota"
                                    placeholder="Masukkan kota domisili" value="{{ auth()->user()->kota }}" tabindex="1"
                                    required>
                                @error('kota')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Merek Rokok</label>
                                <input id="merek" type="text"
                                    class="form-control @error('merek') is-invalid @enderror input-rounded" name="merek"
                                    placeholder="Masukkan merek rokok" value="{{ auth()->user()->merek }}" tabindex="1"
                                    required>
                                @error('merek')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Pekerjaan</label>
                                <input id="pekerjaan" type="text"
                                    class="form-control @error('pekerjaan') is-invalid @enderror input-rounded" name="pekerjaan"
                                    placeholder="Masukkan pekerjaan" value="{{ auth()->user()->pekerjaan }}" tabindex="1"
                                    required>
                                @error('pekerjaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" style="color: #fff;">Hoby</label>
                                <input id="hoby" type="text"
                                    class="form-control @error('hoby') is-invalid @enderror input-rounded" name="hoby"
                                    placeholder="Masukkan hoby" value="{{ auth()->user()->hoby }}" tabindex="1"
                                    required>
                                @error('hoby')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:white">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                         @if(auth()->user()->jk == NULL)
                                        <button type="submit" class="btn btn-lg btn-block btn-rounded" tabindex="4">
                                            Simpan
                                        </button>
                                        @else
                                        <button type="submit" class="btn btn-lg btn-block btn-rounded" tabindex="4">
                                            Kembali ke Home
                                        </button>
                                        @endif
                                    </div>
                                </div>
                               
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
    <div class="modal fade" id="exampleModal" tabindex="100" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="background: black; opacity:90%">
            <div class="modal-header float-right">
            
            </div>
            <div class="modal-body" >
                <a href="" style="float:right; color:aliceblue; font-size: 20px;">Profile</a> <br><br>
                <a href="" style="float:right; color:aliceblue; font-size: 20px;">Stampel</a> <br><br>
                <a href="" style="float:right; color:aliceblue; font-size: 20px;">Klaim Stampel</a> <br><br>
                <a href="" style="float:right; color:aliceblue; font-size: 20px;">Log Out</a>
            </div>
            <div class="modal-footer">
                <button type="button" style="color:#fff" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        </div>
       
    </div>




@endsection