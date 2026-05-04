@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li><i class="bi bi-exclamation-triangle-fill me-2"></i> {{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($type == 'preview')
            <div class="text-center py-5">
                <h2 class="fw-bold text-primary">📄 Blade System Tools</h2>
                <p class="text-muted">Generate new blade files or download current previews.</p>
                
                <div class="mt-5">
                    <form action="/create-blade" method="POST" class="d-flex justify-content-center gap-2 mb-4">
                        @csrf
                        <input type="text" name="blade_name" class="form-control w-25 shadow-sm" placeholder="e.g. contact-page" required>
                        <button type="submit" class="btn btn-dark px-4 shadow-sm">
                            <i class="bi bi-plus-circle me-1"></i> Create via Command
                        </button>
                    </form>

                    <div class="mt-4">
                        <a href="/download-blade" class="btn btn-success btn-lg px-5 shadow-sm">
                            <i class="bi bi-download me-2"></i> Download preview.blade.php
                        </a>
                        <p class="mt-3 text-secondary">Total System Downloads: <span class="badge bg-secondary">{{ $count }}</span></p>
                    </div>
                </div>
            </div>

        @elseif($type == 'upload')
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary mb-0">📂 File Management</h2>
                <span class="badge bg-info text-dark">Allowed: PDF, TXT, DOCX, PHP</span>
            </div>

            <form action="/upload-file" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded-4 border mb-5 shadow-sm">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <label class="form-label fw-semibold">Select File to Upload</label>
                        <input type="file" name="file" class="form-control form-control-lg shadow-sm" required>
                        <div class="form-text mt-2">Maximum file size: 2MB.</div>
                    </div>
                    <div class="col-md-3 mt-3 mt-md-0 pt-md-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100 shadow-sm">
                            <i class="bi bi-cloud-arrow-up-fill me-1"></i> Upload Now
                        </button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover align-middle shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-3">File Name</th>
                            <th>Uploaded At</th>
                            <th class="text-end pe-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($files as $file)
                        <tr>
                            <td class="ps-3 fw-medium">
                                <i class="bi bi-file-earmark-text me-2 text-primary"></i> {{ $file->filename }}
                            </td>
                            <td class="text-muted small">{{ $file->created_at->diffForHumans() }}</td>
                            <td class="text-end pe-3">
                                <form action="/delete-file/{{ $file->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this file?');">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger px-3">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <i class="bi bi-folder2-open display-4 d-block mb-2"></i>
                                No files found in the database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection