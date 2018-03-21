@extends('layouts.navbar')
@section('title', 'Invoice | Crypto Merchant')
@section('body')

                

            <div class="content">
                <div class="title-invoice m-b-md">
                Invoice
                </div>
                <div class="invoice-sub">A great way to get paid. Simply request to bill your costumers.  Perfect for freelancers <br/> and for businesses that offers:</div>
            </div>
        <br/>

        <div class="container">
    <div class="row one invoice">
            <div class="col-sm-12 in-check">
            <input type="checkbox" id="cbtest" checked disabled />
            <label for="cbtest" class="check-box in-img"></label>
            <div class="in-row" >Consultations</div>
            </div>
            
            <br/>
            <div class="col-sm-12 in-check">
            <input type="checkbox" id="cbtest" checked disabled />
            <label for="cbtest" class="check-box in-img"></label>
            <div class="in-row" >Coaching</div>
            </div>
            
            <br/>
            <div class="col-sm-12 in-check">
            <input type="checkbox" id="cbtest" checked disabled />
            <label for="cbtest" class="check-box in-img"></label>
            <div class="in-row" >Services</div>
            </div>
            
          </div>

        </div>
                
        <div class="in-box">

        <a href="register">
        <button class="invoice-sign" type="button" style="background-color: #0e0d61;">Sign Up</button>
        </a>
        <p class="in-sign">
        Get paid without fuss. Try it today.
        </p>

        </div>
@endsection    