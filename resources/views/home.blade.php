@extends('master')

@section('title', "La La Landing")

@section('content')
<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="/images/bootstrap-logo.svg" alt="" width="72" height="57">
  <h2>La La Landing</h2>
  <p class="lead">Some description TBD</p>
</div>

<div class="row g-5">
  
  <div class="col-md-12 col-lg-12">
    <h4 class="mb-3">Subscription form</h4>
    <form class="needs-validation" novalidate action="/subscribe" method="POST">
      {{ csrf_field() }}
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-12">
          <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address_2">
        </div>

        <div class="col-md-5">
          <label for="country" class="form-label">Country</label>
          <select class="form-select" id="country" name="country" required>
            <option value="">Choose...</option>
            <option>United States</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label">State</label>
          <select class="form-select" id="state" name="state" required>
            <option value="">Choose...</option>
            <option>California</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>

        <div class="col-md-3">
          <label for="zip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>
      </div>

      <hr class="my-4">

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="privacy" name="privacy">
        <label class="form-check-label" for="privacy">I have read and agree to the <a href="#">Privacy Policy</a>.</label>
      </div>


      

      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
    </form>
  </div>
</div>
@endsection