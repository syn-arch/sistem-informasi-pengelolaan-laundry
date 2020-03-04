@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="pull-left">
                <h3 class="box-title">Data transaksi</h3>
            </div>
            <br><br><br>
            <div class="box-body">
                @if($msg = Session::get('pesan'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button class="close" data-dismiss="alert">
                        &times;
                    </button>
                    <strong>Berhasil</strong>
                    <p>{{$msg}}</p>
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped tables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Invoice</th>
                                <th>Member</th>
                                <th>Tanggal</th>
                                <th>Total Bayar</th>
                                <th>Dibayar</th>
                                <th>Status</th>
                                <th><i class="fa fa-gears"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($transaksi as $row)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$row->kode_invoice}}</td>
                                <td>{{$row->member->nama_member}}</td>
                                <td>{{$row->tgl}}</td>
                                <td>{{"Rp. " . number_format($row->total_bayar)}}</td>
                                <td>
                                    <span class="label label-{{$row->dibayar == 'Dibayar' ? 'success' : 'danger' }}">
                                        {{$row->dibayar}}
                                    </span>
                                </td>
                                <td>
                                    <select data-id="{{$row->id}}" name="status" class="ubah_status label label-<?php if($row->status == "Baru"){
                                            echo 'success';
                                       }elseif($row->status == "Proses"){
                                            echo 'warning';
                                        }elseif($row->status == "Selesai"){
                                            echo 'info';
                                        }elseif($row->status == "Diambil"){
                                            echo 'primary';
                                        }?>">
                                               <option value="Baru" {{$row->status == 'Baru' ? 'selected' : ''}}>Baru</option>
                                               <option value="Proses" {{$row->status == 'Proses' ? 'selected' : ''}}>Proses</option>
                                               <option value="Selesai" {{$row->status == 'Selesai' ? 'selected' : ''}}>Selesai</option>
                                               <option value="Diambil" {{$row->status == 'Diambil' ? 'selected' : ''}}>Diambil</option>
                                           </select>
                                       </td>
                                       <td>
                                        <a href="/transaksi/invoice/{{$row->id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="#bayar-modal" data-toggle="modal" data-id="{{$row->id}}" class="btn btn-primary bayar {{$row->dibayar == 'Belum Dibayar' ?: 'disabled'}}"><i class="fa fa-dollar"></i></a>
                                        <a href="/transaksi/destroy/{{$row->id}}" class="btn btn-danger hapus-transaksi"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bayar-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Bayar Transaksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-bayar" method="POST">
                        @csrf
                        <div class="form-group" id="total-bayar">
                            <label for="total_bayar">Total Bayar</label>
                            <input type="text" class="form-control total_bayar" name="total_bayar" id="total_bayar" placeholder="Total Bayar" readonly>
                            @error('total_bayar')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group" id="tunai">
                            <label for="tunai">Tunai</label>
                            <input type="text" class="form-control tunai" autocomplete="off" name="tunai" id="tunai" placeholder="Tunai">
                            @error('tunai')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group" id="kembalian">
                            <label for="kembalian">Kembalian</label>
                            <input type="text" class="form-control kembalian" name="kembalian" id="kembalian" placeholder="Kembalian" readonly>
                            @error('kembalian')
                            <small style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('js')
    <script>

        $(function(){

            $('.tables').DataTable()

            $('.tunai').keyup(function(){
                var tunai = $(this).val()
                var total = $('.total_bayar').val()
                var kembalian = tunai - total;
                $('.kembalian').val(kembalian)
            })

            $('.hapus-transaksi').click(function(e){
                e.preventDefault()
                var link = $(this).attr('href')
                swal({
                    title: "Apakah anda yakin?",
                    text: "Data yang dihapus tidak dapat dikembalikan",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        document.location.href = link
                    } else {
                        swal("Hapus dibatalkan")
                    }
                })
            })

            $('#DataTables_Table_0_wrapper').on('click', '.bayar', function(){
                var id = $(this).data('id')
                $.ajax({
                    url : '/transaksi/get_transaksi/' + id,
                    data : {id : id},
                    success: function(datas){
                        $('.form-bayar').attr('action', '/transaksi/bayar_transaksi/'+id)
                        $('.total_bayar').val(datas)
                    }
                })
            })

            $(document).on('change', '.ubah_status', function(){
                
                var id = $(this).data('id')
                var status = $(this).val()

                if (status == 'Baru') {
                    $(this).attr('class', 'ubah_status label label-success')
                }

                if(status == 'Proses'){
                    $(this).attr('class', 'ubah_status label label-warning')
                }

                if(status == 'Selesai'){
                    $(this).attr('class', 'ubah_status label label-info')
                }

                if(status == 'Diambil'){
                    $(this).attr('class', 'ubah_status label label-primary')
                }

                $.ajax({
                    url : '/transaksi/ubah_status/' + id + '/' + status,
                    success : function(){
                        swal('Berhasil', 'Status berhasil diubah', 'success')
                    }
                })
            })

        })
    </script>
    @endpush