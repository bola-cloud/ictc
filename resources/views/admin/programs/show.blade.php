@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="card p-4">
        <div class="text-center">
            <h2 class="display-4" style="color: #2d6a4f; font-weight: bold;">
                {{ $program->en_title }}
            </h2>
            <p class="lead" style="color: #6c757d;">
                <strong>{{ __('lang.related_scope') }}:</strong> {{ $program->scope->en_title }}
            </p>
            <p class="lead" style="color: #6c757d;">
                {{ $program->en_description }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-8">
                <div class="custom-card">
                    <div class="card-image" style="background-image: url('{{ asset('storage/' . $program->image) }}'); background-size: cover; background-position: center; height: 400px;"></div>
                    <div class="card-body">
                        <h4 class="card-title" style="color: #2d6a4f;">
                            {{ __('lang.program_description') }}
                        </h4>
                        <p class="card-text" style="color: #555;">
                            {{ $program->en_description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light p-4">
                    <h5 class="mb-4" style="color: #2d6a4f;">{{ __('lang.program_details') }}</h5>
                    <ul class="list-unstyled">
                        <li><strong>{{ __('lang.targeted_beneficiaries') }}:</strong> {{ $program->targeted_beneficiaries }} </li>
                        <li><strong>{{ __('lang.total_budget') }}:</strong> {{ $program->total_budget }} </li>
                        <li><strong>{{ __('lang.project_duration') }}:</strong> {{ $program->project_duration }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
