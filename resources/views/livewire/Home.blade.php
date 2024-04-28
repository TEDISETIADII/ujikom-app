<div>
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">Laundry SMKN 1 Ciamis</a>
   
     
    @if(auth()->user())
    @if (auth()->user()->role == 'Pimpinan')
     <a class="btn btn-outline-success" href="{{route('konsumen')}}" >Lihat Konsumen</a>
     @else
    @endif

    @else
    <form class="d-flex">
      <a class="btn btn-outline-success" href="login" >Login</a>
    </form>
    @endif
  </div>
</nav>

    <div class="row">
        <div class="col-auto">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Cari Berdasarkan Kode" aria-label="Cari Berdasarkan Kode"
                    aria-describedby="basic-addon1" wire:model='searchorder' wire:input='resetPageOrder'>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> </h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Daftar Laundry</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>Tanggal</th>
                        <th>Kode</th>
                        <th>Total Harga</th>
                        <th>Jenis Pelayanan</th>
                        <th>Status</th>
                        <th>Status Pembayaran</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->updated_at->format('d-m-y') }}</td>
                            <td>{{ $order->kode_laundry }}</td>
                            <td>{{ 'Rp' . number_format($order->total_harga, 0, ',', '.') }}</td>
                            <td>{{ $order->layanan->nama_layanan }}</td>
                            <td class="@if ($order->status == 'baru') bg-danger @elseif($order->status == 'proses') bg-warning @else bg-success @endif text-white border"
                                style="text-transform: uppercase;">
                                {{ $order->status }}
                            </td>
                            <td class="@if ($order->pembayaran->status_pembayaran == 'lunas') bg-success @else bg-danger @endif text-white"
                                style="text-transform: uppercase;">
                                {{ $order->pembayaran->status_pembayaran }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <h5 class="text-center">Belum ada orderan</h5>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

    <div class="row">
        <div class="col">
            {{ $orders->links() }}
        </div>
    </div>
</div>