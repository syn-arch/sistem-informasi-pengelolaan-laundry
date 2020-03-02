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
                                <th>Nama Member</th>
                                <th>Tanggal</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th><i class="fa fa-gear"></i></th>
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
                                <td>{{$row->total_bayar}}</td>
                                <td>{{$row->status}}</td>
                                <td>
                                    <a href="/transaksi/detail_transaksi/{{$row->id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="transaksi-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLongTitle">Data transaksi</h5>
            </div>
            <div class="modal-body">
                <form action="/transaksi/store" method="post" class="form-transaksi">
                    @csrf
                    <div class="form-group">
                        <label for="nama_transaksi">Nama transaksi</label>
                        <input type="text" class="form-control nama_transaksi" name="nama_transaksi" id="nama_transaksi" placeholder="Nama transaksi" value="{{ old('nama_transaksi') }}">
                        @error('nama_transaksi')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control jk">
                            <option value="pilih_jenis">-- Pilih Jenis Kelamin --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jk')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="20" rows="10" class="form-control alamat" placeholder="Alamat"></textarea>
                        @error('alamat')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control telepon" name="telepon" id="telepon" placeholder="Telepon" value="{{ old('telepon') }}">
                        @error('telepon')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Submit</button>
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

        $('.hapus-transaksi').click(function(e){
            e.preventDefault()
            var link = $(this).attr('href')
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.location.href = link
                } else {
                    swal("Hapus dibatalkan")
                }
            });

        })

        $('.ubah-transaksi').click(function(){
            var id = $(this).data('id')
            $.ajax({
                url : '/transaksi/get_transaksi/' + id,
                data : {id : id},
                success: function(data){
                    transaksi =  JSON.parse(data)
                    $('.nama_transaksi').val(transaksi.nama_transaksi)
                    $('.alamat').val(transaksi.alamat)
                    $('.telepon').val(transaksi.telepon)
                    $('.jk').val(transaksi.jk)
                    $('.form-transaksi').attr('action','/transaksi/update/'+id)
                }
            })
        })

    })
    
</script>

@endpush