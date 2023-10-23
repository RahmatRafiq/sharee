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
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tentang as $row)
                                        <tr>
                                            <td>{{ $row->judul }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $row->gambar) }}" width="150px">
                                            </td>
                                            <td>{{ $row->telepon }}</td>
                                            <td>
                                                <a href="{{ route('tentang-kami.edit', $row->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
                                                <form action="{{ route('tentang-kami.destroy', $row->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
