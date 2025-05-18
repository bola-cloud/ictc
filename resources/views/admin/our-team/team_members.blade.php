@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">
    <div class="row card p-3">

        <div class="d-flex justify-content-between align-items-center p-3">
            <h2 class="mb-4">{{ __('lang.team_members_title') }}</h2>
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
                {{ __('lang.add_team_member') }}
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
                    <th>{{ __('lang.image') }}</th>
                    <th>{{ __('lang.en_name') }}</th>
                    <th>{{ __('lang.ar_name') }}</th>
                    <th>{{ __('lang.section') }}</th>
                    <th>{{ __('lang.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>
                            @if($member->image)
                                <img src="{{ asset('storage/' . $member->image) }}" width="60" class="rounded" />
                            @endif
                        </td>
                        <td>{{ $member->en_name }}</td>
                        <td>{{ $member->ar_name }}</td>
                        <td>
                            @php
                                $section = $sections->firstWhere('id', $member->team_section_id);
                            @endphp
                            {{ app()->getLocale() === 'ar' ? $section->ar_title : $section->en_title }}
                        </td>
                        <td>
                            <button class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $member->id }}">
                                {{ __('lang.edit') }}
                            </button>
                            <!-- Delete Button -->
                            <button class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $member->id }}">
                                {{ __('lang.delete') }}
                            </button>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $member->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('admin.team_members.update', $member->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('lang.edit_team_member') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('admin.our-team._form', ['member' => $member, 'sections' => $sections])
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
                    <div class="modal fade" id="deleteModal{{ $member->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('admin.team_members.destroy', $member->id) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('lang.delete_team_member') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ __('lang.confirm_delete_member', ['name' => $member->en_name]) }}</p>
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
        <div class="modal fade" id="createModal" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('admin.team_members.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('lang.create_team_member') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @include('admin.our-team._form', ['member' => null, 'sections' => $sections])
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
