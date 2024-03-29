@extends('layouts.default')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="ml-md-auto py-2 py-md-0">
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div closs="card-title"> Edit Kategori <i>{{ $kategori->nama_kategori }}</i></div>
                            <a href="{{ route('kategori.index') }}" class="btn btn-warning btn-sm ml-auto"><i
                                    class="fas fa-undo"></i>Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('kategori.update', $kategori->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="kategori">Nama Kategori</label>
                                        <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}"
                                            class="form-control" id="text" placeholder="Enter Kategori">

                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
