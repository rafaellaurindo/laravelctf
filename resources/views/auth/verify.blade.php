@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('frontend_messages.verify_your_email_address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('frontend_messages.new_verification_link_has_been_sent') }}
                        </div>
                    @endif

                    {{ __('frontend_messages.before_check_your_email') }}
                    {{ __('frontend_messages.if_you_did_not_receive') }}, <a href="{{ route('verification.resend') }}">{{ __('frontend_messages.click_here_to_request_another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
