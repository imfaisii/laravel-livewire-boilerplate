@extends('layouts.guest')

@section('content')
    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <span class="alert-icon text-success me-2">
                <i class="ti ti-check ti-xs"></i>
            </span>
            New verification link has been sent.
        </div>
    @endif

    <h4 class="pt-2 mb-1">Verify your email ✉️</h4>
    <p class="mb-4 text-start">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just
        emailed to you? If you didn\'t receive the email, we will gladly send you another.
    </p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="mb-3 btn btn-primary w-100" type="submit"> Resend Reset Link </button>
    </form>

    <p class="mb-0 text-center">
        <livewire:auth.logout />
    </p>
@endsection

@push('scripts')
    <script>
        $(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                $(this).find('button[type="submit"]').attr('disabled', 'disabled').text('Sending...');

                this.submit();
            });
        });
    </script>
@endpush
