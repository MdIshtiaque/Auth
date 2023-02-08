<!-- 2 column grid layout with text inputs for the first and last names -->


<!-- Email input -->
<div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" name="email" />
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <label class="form-label" for="form3Example3">Email address</label>
</div>

<!-- Password input -->
<div class="form-outline mb-4">
    <input type="password" id="form3Example4" class="form-control" name="password" />
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <label class="form-label" for="form3Example4">Password</label>
</div>


<!-- Login button -->
<button type="submit" class="btn btn-primary btn-block mb-4">
    Sign in
</button>


