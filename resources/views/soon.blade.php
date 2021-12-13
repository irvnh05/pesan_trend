@extends('layouts.none')

@section('title')
Pesan_Trend
@endsection

@section('content')
    <section>
        <div class="section-success d-flex align-items-center mt-5">
        <div class="col text-center">
          <img src="pesantrend-template/frontend/images/logo.png" alt="" />
          <h1>Cooming Soon!</h1>
          <p>Our website is under construction. We`ll be here soon
             <br />
            with our new awesome site. Subscribe to be notified.</p>
           <form class="" action="">
            <input  class="form-control w-50 mb-2 mx-auto"  id="form-email" name="form-email" type="email" placeholder="Your email address" />
            <input class="btn btn-login" type="submit" value="Notify me" />
           </form>
        </div>
      </div>
    </section>
@endsection
