<!-- 2 column grid layout with text inputs for the first and last names -->
<div class="row">
    <div class="col-md-6 mb-4">
        <div class="form-outline">
            <input type="text" id="form3Example1" class="form-control @error('first_name')
            is-invalid
            @enderror" name="first_name" />
        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <label class="form-label" for="form3Example1">First name</label>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-outline">
            <input type="text" id="form3Example2" class="form-control @error('last_name')
            is-invalid
            @enderror" name="last_name" />
        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <label class="form-label" for="form3Example2">Last name</label>
        </div>
    </div>
</div>

<!-- Email input -->
<div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control @error('email')
    is-invalid
    @enderror" name="email" />
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label class="form-label" for="form3Example3">Email address</label>
</div>

<!-- Password input -->
<div class="form-outline mb-4">
    <input type="password" id="form3Example4" class="form-control @error('password')
    is-invalid
    @enderror " name="password" />
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <label class="form-label" for="form3Example4">Password</label>
</div>


<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4">
    Sign up
</button>

<!-- Login buttons -->
<div class="text-center">
    <p>Already have an account?</p>
    <a href="{{ URL::route('login'); }}" class="btn btn-primary btn-block mb-4">Go to Sign in</a>




</div>
