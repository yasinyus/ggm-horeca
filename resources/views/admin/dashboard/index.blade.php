@extends('layouts.admin')

@section('content')
<div class="main-content" style="background-image: url('{{ asset('assets/img/bg_red.png') }}') !important;  background-repeat: no-repeat; background-size: cover; max-width: 100%;
height: 100vh;">
    <section class="section" style="margin:30px">
      <h3>Dashboard</h3>
        <div class="row" >
          <div class="col-lg-12">
            <div class="card card-statistic-1" style="background: #361D1D;">
              <div class="card-icon" style="border-radius:50%">
                <i class="fa fa-users fa-2x" style="color:#FF5C00"></i>
              </div>
              <div class="card-wrap" >
                <div class="card-header">
                  {{ $total_trans }}
                  <h4 style="color:#fff; font-size: 20px"></h4>
                </div>
                <div class="card-body">
                  <p style="color:#fff; font-size: 14px">Total Seluruh Transaksi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section" style="margin:30px">
      <a href="{{ route('export.excel') }}" class="btn btn-success float-right">Download</a>
      <h3>All Area</h3>
      <style> 
      .even {
      background-color: #48292B !important;
      }
      .odd {
          background-color:  #361D1D !important;
      }
        .borderless td, .borderless th {
            border: none;
        }
      </style>
      
      <div class="row">
        <div class="col-12">
          {{-- <div class="card">
            <div class="card-body"> --}}
              <div class="table-responsive" >
                <table class="table table-md borderless">
                  <tr style="background: #361D1D;">
                    <th>No</th>
                    <th>Outlet</th>
                    <th>AO Office</th>
                    <th>Regional</th>
                    <th>Transaction</th>
                    <th>Reedem</th>
                  </tr>
                  <?php  $styles = array('even','odd'); ?>
                            @foreach ($datas as $no => $data)
                                <tr style="background: #48292B" class="<?php echo $styles[$no % 2]; ?>">
                                    <td scope="row" style="text-align: center">{{ ++$no + ($datas->currentPage()-1) * $datas->perPage() }}</td>
                                    <td>{{ $data->outlet }}</td>
                                    <td>{{ $data->ao_name }}</td>
                                    <td>{{ $data->ro }}</td>
                                    <td>{{ $data->transaction }}</td>
                                    <td>{{ $data->reedem }}</td> 
                                </tr>
                               
                            @endforeach
             
                </table>
              {{-- </div>
            </div> --}}
            
          </div>
        </div>
    </section>
</div>
@endsection