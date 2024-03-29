{{-- 
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
                            <div class="card-title">Data Tags</div>
                            <a href="#" class="btn btn-primary btn-sm ml-auto" data-toggle="modal"
                                data-target="#addTagsModal"><i class="fa fa-plus"></i> Tambah Tags</a>
                        </div>
                    </div>
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
                                        <th>Id</th>
                                        <th>Nama tags</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tags as $i=>$row)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $row->nama_tags }}</td>
                                            <td>{{ $row->slug }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm edit-tags"
                                                    data-toggle="modal" data-target="#editTagsModal"
                                                    data-id="{{ $row->id }}" data-nama="{{ $row->nama_tags }}"
                                                    data-slug="{{ $row->slug }}"><i class="fas fa-pen"></i> Edit</a>

                                                <form action="{{ route('tags.destroy', $row->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method ('delete')
                                                    <button class="btn btn-danger btn-sm" type="submit">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Data Masih Kosong</td>
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

    <!-- Modal Tambah Tags -->
    <div class="modal fade" id="addTagsModal" tabindex="-1" role="dialog" aria-labelledby="addtagsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addtagsModalLabel">Tambah Tags</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_tags">Nama tags</label>
                            <input type="text" class="form-control" id="nama_tags" name="nama_tags"
                                placeholder="Nama Tags" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Tags -->
    <div class="modal fade" id="editTagsModal" tabindex="-1" role="dialog" aria-labelledby="editTagsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editTagsForm" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editTagsModalLabel">Edit Tags</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_nama_tags">Nama Tags</label>
                            <input type="text" class="form-control" id="edit_nama_tags" name="edit_nama_tags"
                                placeholder="Nama Tags" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.edit-tags', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama_tags');
            var slug = $(this).data('slug');

            $('#editTagsForm').attr('action', '/tags/' + id);
            $('#edit_nama_tags').val(nama);
        });
    </script>
@endsection --}}



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
                            <div class="card-title">Data Tags</div>
                            <a href="#" class="btn btn-primary btn-sm ml-auto" data-toggle="modal"
                                data-target="#addTagsModal"><i class="fa fa-plus"></i> Tambah Tags</a>
                        </div>
                    </div>
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
                                        <th>Id</th>
                                        <th>Nama tags</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($tags as $i=>$row)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $row->nama_tags }}</td>
                                            <td>{{ $row->slug }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm edit-tags"
                                                    data-toggle="modal" data-target="#editTagsModal"
                                                    data-id="{{ $row->id }}" data-nama_tags="{{ $row->nama_tags }}"
                                                    data-slug="{{ $row->slug }}"><i class="fas fa-pen"></i> Edit</a>

                                                <form action="{{ route('tags.destroy', $row->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method ('delete')
                                                    <button class="btn btn-danger btn-sm" type="submit">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Data Masih Kosong</td>
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

    <!-- Modal Tambah Tags -->
    <div class="modal fade" id="addTagsModal" tabindex="-1" role="dialog" aria-labelledby="addtagsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('tags.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addtagsModalLabel">Tambah Tags</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_tags">Nama tags</label>
                            <input type="text" class="form-control" id="nama_tags" name="nama_tags"
                                placeholder="Nama Tags" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Tags -->
<div class="modal fade" id="editTagsModal" tabindex="-1" role="dialog" aria-labelledby="editTagsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="editTagsForm" method="POST">
                @csrf
                @method('PUT') <!-- Ubah dari POST menjadi PUT -->
                <div class="modal-header">
                    <h5 class="modal-title" id="editTagsModalLabel">Edit Tags</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_tags">Nama Tags</label>
                        <input type="text" class="form-control" id="edit_nama_tags" name="edit_nama_tags" placeholder="Nama Tags" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script>
        $(document).on('click', '.edit-tags', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama_tags');
            var slug = $(this).data('slug');

            $('#editTagsForm').attr('action', '/tags/' + id);
            $('#edit_nama_tags').val(nama);
        });
    </script>
@endsection
