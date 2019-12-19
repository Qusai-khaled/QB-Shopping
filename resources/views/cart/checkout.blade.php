@extends('layouts.app')
@section('style')
    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
            }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
            }

        .StripeElement--invalid {
            border-color: #fa755a;
            }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
            }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <h1><strong>Total amount is ${{$amount}}</strong></h1>
            <form action="/charge" method="post" id="payment-form">
                @csrf
                <div >
                <input type="hidden" name="amount" value="{{$amount}}">
                    <label for="card-element">
                    <h2>Credit or debit card</h2>
                    </label>
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <button class="btn btn-primary mt-2">Submit Payment</button>
                <p id="loading" style="display:none;"> Payment is in process . please wait...</p>
            </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset('js/stripe.js') }}"></script>
@endsection
