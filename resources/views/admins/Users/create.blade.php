@extends('admins.layouts.master')

@section('css')
@endsection
@section('content')

<form class="form-add-new-user form-style-2">
    <div class="wg-box">
        <div class="left">
            <h5 class="mb-4">Account</h5>
            <div class="body-text">Fill in the information below to add a new account</div>
        </div>
        <div class="right flex-grow">
            <fieldset class="name mb-24">
                <div class="body-title mb-10">Name</div>
                <input class="flex-grow" type="text" placeholder="Username" name="name" tabindex="0" value="" aria-required="true" required="">
            </fieldset>
            <fieldset class="email mb-24">
                <div class="body-title mb-10">Email</div>
                <input class="flex-grow" type="email" placeholder="Email" name="email" tabindex="0" value="" aria-required="true" required="">
            </fieldset>
            <fieldset class="password mb-24">
                <div class="body-title mb-10">Password</div>
                <input class="password-input" type="password" placeholder="Enter password" name="password" tabindex="0" value="" aria-required="true" required="">
                <span class="show-pass">
                    <i class="icon-eye view"></i>
                    <i class="icon-eye-off hide"></i>
                </span>
            </fieldset>
            <fieldset class="password">
                <div class="body-title mb-10">Confirm password</div>
                <input class="password-input" type="password" placeholder="Confirm password" name="password" tabindex="0" value="" aria-required="true" required="">
                <span class="show-pass">
                    <i class="icon-eye view"></i>
                    <i class="icon-eye-off hide"></i>
                </span>
            </fieldset>
        </div>
    </div>
    <div class="wg-box">
        <div class="left">
            <h5 class="mb-4">Pernission</h5>
            <div class="body-text">Items that the account is allowed to edit</div>
        </div>
        <div class="right flex-grow">
            <fieldset class="mb-24">
                <div class="body-title mb-10">Add product</div>
                <div class="radio-buttons">
                    <div class="item">
                        <input class="" type="radio" name="add-product" id="add-product1" checked>
                        <label class="" for="add-product1"><span class="body-title-2">Allow</span></label>
                    </div>
                    <div class="item">
                        <input class="" type="radio" name="add-product" id="add-product2">
                        <label class="" for="add-product2"><span class="body-title-2">Deny</span></label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-24">
                <div class="body-title mb-10">Update product</div>
                <div class="radio-buttons">
                    <div class="item">
                        <input class="" type="radio" name="update-product" id="update-product1">
                        <label class="" for="update-product1"><span class="body-title-2">Allow</span></label>
                    </div>
                    <div class="item">
                        <input class="" type="radio" name="update-product" id="update-product2" checked>
                        <label class="" for="update-product2"><span class="body-title-2">Deny</span></label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-24">
                <div class="body-title mb-10">Delete product</div>
                <div class="radio-buttons">
                    <div class="item">
                        <input class="" type="radio" name="delete-product" id="delete-product1" checked>
                        <label class="" for="delete-product1"><span class="body-title-2">Allow</span></label>
                    </div>
                    <div class="item">
                        <input class="" type="radio" name="delete-product" id="delete-product2">
                        <label class="" for="delete-product2"><span class="body-title-2">Deny</span></label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-24">
                <div class="body-title mb-10">Apply discount</div>
                <div class="radio-buttons">
                    <div class="item">
                        <input class="" type="radio" name="apply-product" id="apply-product1">
                        <label class="" for="apply-product1"><span class="body-title-2">Allow</span></label>
                    </div>
                    <div class="item">
                        <input class="" type="radio" name="apply-product" id="apply-product2" checked>
                        <label class="" for="apply-product2"><span class="body-title-2">Deny</span></label>
                    </div>
                </div>
            </fieldset>
            <fieldset class="">
                <div class="body-title mb-10">Create coupon</div>
                <div class="radio-buttons">
                    <div class="item">
                        <input class="" type="radio" name="create-product" id="create-product1">
                        <label class="" for="create-product1"><span class="body-title-2">Allow</span></label>
                    </div>
                    <div class="item">
                        <input class="" type="radio" name="create-product" id="create-product2" checked>
                        <label class="" for="create-product2"><span class="body-title-2">Deny</span></label>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="bot">
        <button class="tf-button w180" type="submit">Save</button>
    </div>

</form>

@endsection

@section('js')
@endsection

    