@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="pull-left">
                <h3 class="box-title">INVOICE {{$data->kode_invoice}}</h3>
            </div>
            <div class="pull-right">
                <h3 class="box-title">Tanggal : {{date('d/m/Y', strtotime($data->tgl))}}</h3>
            </div>
            <br>
            <hr style="margin-bottom: -20px">
            <br><br><br>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table">
                            <tr>
                                <th>Nama Member</th>
                                <td>{{$data->member->nama_member}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->dibayar}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Jumlah Harga</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($detail as $row): ?>
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->paket->nama_paket}}</td>
                                            <td>{{"Rp. " . number_format($row->paket->harga)}}</td>
                                            <td>{{$row->qty}}</td>
                                            <td>{{"Rp. " . number_format($row->jumlah_harga)}}</td>
                                            <td>{{$row->keterangan ? $row->keterangan : '-' }}</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-8">
                        <table class="table">
                            <tr>
                                <td></td>
                                <td></td>
                                <th>Sub Total</th>
                            </tr>
                            <tr>
                                <th>Diskon (%)</th>
                                <td></td>
                                <td>{{$data->diskon}}</td>
                            </tr>
                            <tr>
                                <th>Pajak</th>
                                <td></td>
                                <td>{{"Rp. " . number_format($data->pajak) }}</td>
                            </tr>
                            <tr>
                                <th>Biaya Tambahan</th>
                                <td></td>
                                <td>{{"Rp. " . number_format($data->biaya_tambahan) }}</td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <td></td>
                                <td>{{"Rp. " . number_format($data->total_bayar)}}</td>
                            </tr>
                            @if($data->dibayar == 'Dibayar')
                            <tr>
                                <th>Tunai</th>
                                <td></td>
                                <td>{{"Rp. " . number_format($data->tunai)}}</td>
                            </tr>
                            <tr>
                                <th>Kembalian</th>
                                <td></td>
                                <td>{{"Rp. " . ($data->tunai - $data->total_bayar)}}</td>
                            </tr>
                            @endif
                            <tr>
                                <td><a href="/laporan" class="btn btn-primary btn-block"><i class="fa fa-arrow-left"></i> Kembali</a></td>
                                <td></td>
                                <td><a target="_blank" href="/transaksi/cetak_invoice/{{$data->id}}" class="btn btn-danger btn-block"><i class="fa fa-print"></i> Cetak</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush