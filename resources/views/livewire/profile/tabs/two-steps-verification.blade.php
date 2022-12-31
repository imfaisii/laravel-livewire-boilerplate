<div>
    <!-- Two-steps verification -->
    <div class="mb-4 card">
        <h5 class="card-header">Two-steps verification</h5>
        <div class="card-body">
            <h6 class="mb-3 fw-semibold">Two factor authentication is not enabled yet.</h6>
            <p class="w-50">
                Two-factor authentication adds an additional layer of security to your account by requiring more
                than just a password to log in.
                <a href="javascript:void(0);">Learn more.</a>
            </p>
            <button class="mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP">
                Enable two-factor authentication
            </button>
        </div>
    </div>
    <!-- Modal -->
    <!-- Enable OTP Modal -->
    <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
            <div class="p-3 modal-content p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="mb-4 text-center">
                        <h3 class="mb-2">Enable One Time Password</h3>
                        <p>Verify Your Mobile Number for SMS</p>
                    </div>
                    <p>
                        Enter your mobile phone number with country code and we will send you a verification code.
                    </p>
                    <form id="enableOTPForm" class="row g-3" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text">US (+1)</span>
                                <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone"
                                    class="form-control phone-number-otp-mask" placeholder="202 555 0111" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1" disabled>Comming Soon....</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Enable OTP Modal -->

    <!-- /Modal -->

    <!--/ Two-steps verification -->

</div>
