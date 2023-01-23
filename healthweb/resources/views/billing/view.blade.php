<style>

    .col-left{
        /* margin: 0 auto; */
        width:40%;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;
        margin-left: 30px;
        margin-top: 30px;
        color: grey;
        z-index: 1;
    }

    .col-right{
        margin-top: -430px;
        margin-left: 660px;
        margin-right: 30px;
        z-index: -1;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;

    }

    p{
        font-size: large;
        font-weight: bold;
        color: blue;
        text-decoration: underline;
    }

    .form-control{
        border-radius: 15px;
        border-color: grey;
        width: 100%

    }

    #create{

        width: 28%;
        background-color: #E7C14D;
        color: white;
        padding: 10px;
        border-radius: 15px;

    }

    input[type=text]{
        border-radius: 15px;
        border-color: grey;
        width: 100%;
    }



    #title{
        width: 70%;
    }

    #amount{
        width: 25%;
        margin-top: -42px;
        margin-left: 590px;
    }

    #add{
        width: 150px;
        background-color: #3EDF96;
        color: white;
        padding: 10px;
        border-radius: 15px;
    }

    </style>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <form method="post" action="addtobill">
        <div class = "col-left">
            <p>Information</p> <br>

            {{ csrf_field() }}

            <div>
                <label for="patient">{{ __('Patient') }}</label> <br>
                <select class="form-control" id="patient-name" name="patient_name" >
                <option>{{ __('Select Patient') }}</option>
                            @foreach($patients as $patient)
                            <option value="{{ $patient->patient_name }}">{{ $patient->patient_name}}</option>
                            @endforeach
                </select>
            </div>

            <br>

            <label for="PaymentMethod">{{ __('Payment Method') }}</label><br>
                                            <select class="form-control" name="payment_method" id="PaymentMethod">
                                                <option value="Cash">{{ __('Cash') }}</option>
                                                <option value="Online Transfer">{{ __('Online Transfer') }}</option>
                                            </select>
            <br><br>

            <label for="PaymentStatus">{{ __('Payment Status') }}</label><br>
                                            <select class="form-control" name="payment_status">
                                                <option value="Paid">{{ __('Paid') }}</option>
                                                <option value="Unpaid">{{ __('Unpaid') }}</option>
                                            </select>
            <br><br><br>

            <div class = "button">
            <button type = "submit" value = "info" id = "create"> Create Invoice </button>
            </div>

        </div>

        <div class= "col-right">

            <p>Invoice Details</p> <br>

            <div>
                <input type="text" id="title" name="invoice_title" placeholder="{{ __('Invoice Title') }}">
            </div>

            <div>
                <input type="text" id="amount" name="invoice_amount" placeholder="{{ __('Amount') }}">
            </div>

            <br><br>

            <!-- <div class = "button">
            <button type = "submit" value = "info" id = "add"> Add More </button>
            </div> -->

        </div>
        <form>


</x-app-layout>
