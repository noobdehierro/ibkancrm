@extends('admin::layouts.master')

@section('page_title')
    {{ __('debtor::app.debtor.name') }}
@stop

@section('content-wrapper')
    <div class="content full-page">
        <table-component data-src="{{ route('admin.debtor.index') }}">
            <template v-slot:table-header>
                <h1>
                    {!! view_render_event('admin.debtor.index.header.before') !!}

                    {{ Breadcrumbs::render('debtors') }}

                    {{ __('debtor::app.debtor.name') }}

                    {!! view_render_event('admin.debtor.index.header.after') !!}
                </h1>
            </template>

            {{-- @if (bouncer()->hasPermission('debtor.edit')) --}}
            {{-- <template v-slot:table-action> --}}
            {{-- <a href="{{ route('admin.debtor.edit') }}"
                        class="btn btn-md btn-primary">{{ __('admin::app.debtor.create-title') }}</a> --}}
            {{-- </template> --}}
            {{-- @endif --}}
            <table-component>
    </div>
@stop
