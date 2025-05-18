@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">
    <div class="row card p-3">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h2 class="mb-4">{{ __('lang.team_sections_title') }}</h2>

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                {{ __('lang.add_team_section') }}
            </button>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>{{ __('lang.en_title') }}</th>
                    <th>{{ __('lang.ar_title') }}</th>
                    <th>{{ __('lang.layout') }}</th>
                    <th>{{ __('lang.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->en_title }}</td>
                        <td>{{ $section->ar_title }}</td>
                        <td>{{ $section->layout }}</td>
                        <td>
                            <button class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $section->id }}">
                                {{ __('lang.edit') }}
                            </button>

                            <!-- Delete Button -->
                            <button class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $section->id }}">
                                {{ __('lang.delete') }}
                            </button>

                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $section->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $section->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('admin.team_sections.update', $section->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('lang.edit_team_section') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('lang.en_title') }}</label>
                                            <input type="text" name="en_title" value="{{ $section->en_title }}" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('lang.ar_title') }}</label>
                                            <input type="text" name="ar_title" value="{{ $section->ar_title }}" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('lang.layout') }}</label>
                                            <select name="layout" class="form-select" required>
                                                <option value="grid" {{ $section->layout === 'grid' ? 'selected' : '' }}>{{ __('lang.layout_grid') }}</option>
                                                <option value="pyramid" {{ $section->layout === 'pyramid' ? 'selected' : '' }}>{{ __('lang.layout_pyramid') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">{{ __('lang.save_changes') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Edit Modal -->

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal{{ $section->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('admin.team_sections.destroy', $section->id) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('lang.delete_team_section') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('lang.confirm_delete_section', ['name' => $section->en_title]) }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('lang.cancel') }}</button>
                                        <button type="submit" class="btn btn-danger">{{ __('lang.confirm_delete') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Delete Modal -->
                @endforeach
            </tbody>
        </table>

        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('admin.team_sections.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('lang.create_team_section') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">{{ __('lang.en_title') }}</label>
                                <input type="text" name="en_title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __('lang.ar_title') }}</label>
                                <input type="text" name="ar_title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ __('lang.layout') }}</label>
                                <select name="layout" class="form-select" required>
                                    <option value="grid">{{ __('lang.layout_grid') }}</option>
                                    <option value="pyramid">{{ __('lang.layout_pyramid') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap 5 JS (bundle includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
