@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card p-5">
        <div class="d-flex justify-content-center align-items-center p-4">
            <h2>{{ __('lang.vacancies') }}</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3 text-end">
            <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">{{ __('lang.add_new') }}</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('lang.en_title') }}</th>
                    <th>{{ __('lang.ar_title') }}</th>
                    <th>{{ __('lang.location') }}</th>
                    <th>{{ __('lang.job_type') }}</th>
                    <th>{{ __('lang.deadline') }}</th>
                    <th>{{ __('lang.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($vacancies as $index => $vacancy)
                    <tr>
                        <td>{{ $index + 1 + ($vacancies->currentPage() - 1) * $vacancies->perPage() }}</td>
                        <td>{{ $vacancy->en_title }}</td>
                        <td>{{ $vacancy->ar_title }}</td>
                        <td>{{ $vacancy->location }}</td>
                        <td>{{ $vacancy->job_type }}</td>
                        <td>{{ $vacancy->deadline }}</td>
                        <td>
                            <a href="{{ route('admin.jobs.edit', $vacancy) }}" class="btn btn-sm btn-warning">{{ __('lang.edit') }}</a>
                            <form action="{{ route('admin.jobs.destroy', $vacancy) }}" method="POST" style="display:inline-block">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('{{ __('lang.confirm_delete') }}')">{{ __('lang.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center">{{ __('lang.no_data_found') }}</td></tr>
                @endforelse
            </tbody>
        </table>

        {{ $vacancies->withQueryString()->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
