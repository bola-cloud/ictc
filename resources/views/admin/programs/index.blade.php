@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="card p-4">
        <div class="card-header d-flex justify-content-between">
            <h1 class="mb-3">{{ __('lang.programs_list_for_scope') }}: {{ $scope->en_title }}</h1>
            <a href="{{ route('admin.programs.create', $scope->id) }}" class="btn btn-primary mb-3">{{ __('lang.add_program') }}</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>{{ __('lang.en_title') }}</th>
                    <th>{{ __('lang.ar_title') }}</th>
                    <th>{{ __('lang.icon') }}</th>
                    <th>{{ __('lang.color') }}</th>
                    <th>{{ __('lang.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scope->programs as $program)
                <tr>
                    <td>{{ $program->en_title }}</td>
                    <td>{{ $program->ar_title }}</td>
                    <td><i class="{{ $program->icon }}"></i></td>
                    <td><span class="badge" style="background-color: {{ $program->color }}">{{ $program->color }}</span></td>
                    <td>
                        <a href="{{ route('admin.programs.edit', $program->id) }}" class="btn btn-warning btn-sm">{{ __('lang.edit') }}</a>
                        <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('{{ __('lang.confirm_delete') }}')">{{ __('lang.delete') }}</button>
                        </form>
                        <!-- New Show Button -->
                        <a href="{{ route('admin.programs.show', $program->id) }}" class="btn btn-info btn-sm">{{ __('lang.view') }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
