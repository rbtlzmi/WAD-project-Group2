<style>
    .form{
        margin-left: 100px;
    }
    .col-left{
        /* margin: 0 auto; */
        width:85%;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;
        margin-left: 30px;
        margin-top: 30px;
        color: grey;
        z-index: 1;
        padding-left: 40px;
    }

    .col-right{
        margin-left: 555px;
        margin-top: -634px;
        color: grey;

    }

    p{
        font-size: large;
        font-weight: bold;
        color: blue;
        text-decoration: underline;
    }

    input[type=text]{
        width: 40%;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    input[type=number]{
        width: 100px;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    .form-control{
        width: 73%;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    #day{

    }

    #month{

        margin-top: -75px;
        margin-left: 120px;
    }

    #year{

        margin-top: -75px;
        margin-left: 240px;
    }

    #create{

        width: 25%;
        background-color: #E7C14D;
        color: white;
        padding: 10px;
        border-radius: 15px;

    }

    .text-box{
        width: 1250px;

    }

    </style>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient') }}
        </h2>
    </x-slot>
<div class = "form">
    <form method="post" action="addtopatient">
        <div class = "col-left">
            <p>New Patient</p> <br>

            {{ csrf_field() }}
        <div>
            <label for="patient_name">{{ __('Patient Name') }}</label> <br>

            <input type="text"  name="patient_name" placeholder="{{ __('Full Name') }}">
        </div>

            <br>

        <div>
            <label for="patient_ic">{{ __('IC No.') }}</label> <br>

            <input type="text"  name="patient_ic" placeholder="{{ __('IC No.') }}">
        </div>

        <br>

        <div>
            <label for="patient_email">{{ __('Email') }}</label> <br>

            <input type="text"  name="patient_email" placeholder="{{ __('Email') }}">
        </div>

        <br>

        <div>
            <label for="patient_no">{{ __('Phone No.') }}</label> <br>

            <input type="text"  name="patient_no" placeholder="{{ __('Phone No.') }}">
        </div>

        <br>

        <div>
            <label for="patient_address">{{ __('Address') }}</label> <br>

            <input type="text"  name="patient_address" placeholder="{{ __('Address') }}">
        </div>

            <br>

                <br><br>

                <div class = "button">
                <button type = "submit" value = "info" id = "create"> Add Patient </button>
                </div>
        </div>

            <br><br>
            <div class = "col-right">

                <label for="bloodtype">{{ __('Blood Type') }}</label><br>
                                            <select class="form-control" name="blood_type" >
                                                <option value="A">{{ __('A') }}</option>
                                                <option value="B">{{ __('B') }}</option>
                                                <option value="O">{{ __('O') }}</option>
                                                <option value="AB">{{ __('AB') }}</option>
                                            </select>

                <br><br>
                <div>
                    <label for="patient_weight">{{ __('Weight') }}</label> <br>

                    <input type="number"  name="patient_weight" placeholder="{{ __('Weight') }}">   Kg
                </div>
                    <br>
                <div>
                    <label for="patient_height">{{ __('Height') }}</label> <br>

                    <input type="number"  name="patient_height" placeholder="{{ __('Height') }}">    cm
                </div>
                <br>
                <div class="text-box">
                    <label for="patient_mhistory">{{ __('Medical History') }}</label> <br>

                    <input type="text"  name="patient_mhistory" placeholder="{{ __('Note') }}">
                </div>
            </div>

     <form>
</div>
</x-app-layout>
