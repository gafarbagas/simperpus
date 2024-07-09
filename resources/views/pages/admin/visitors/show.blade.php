@extends('layouts.admin')

@section('title', 'Detail Kunjungan')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Detail Kunjungan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="text-dark mb-1">
                            Nama
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-dark">{{ $visitor->name }}</div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="text-dark mb-1">
                            NIP
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-dark">{{ $visitor->nip }}</div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="text-dark mb-1">
                            Tanggal Kunjungan
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="text-dark">{{ $visitor->created_at->format('d M Y H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- return home --}}
<a href="{{ route('admin.visitor') }}" class="btn btn-sm btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
    </span>
    <span class="text">Kembali</span>
</a>
@endsection