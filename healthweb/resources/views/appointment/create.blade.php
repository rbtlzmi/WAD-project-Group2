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
        margin-left: 570px;
        margin-top: -445px;
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

    #patient-name {

        width: 40%;
    }

    #doctor-name {

    width: 40%;
    }

    </style>

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointment') }}
        </h2>
    </x-slot>
<div class = "form">
    <form method="post" action="addtoappointment">
        <div class = "col-left">
            <p>New Appointment</p> <br>

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

        {{-- <div>
            <label for="doctor">{{ __('Doctor') }}</label> <br>

            <input type="text"  name="doctor_name" placeholder="{{ __('Select Doctor') }}">
        </div> --}}

        <div>
            <label for="doctor">{{ __('Doctor') }}</label> <br>
            <select class="form-control" id="doctor-name" name="doctor_name" >
            <option>{{ __('Select Doctor') }}</option>
                        @foreach($users as $user)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                        @endforeach
            </select>
        </div>

            <br>

            <label for="Date">{{ __('Date') }}</label><br>
                <div id="day">
                    <p>Day</p>

                    <input type="number"  name="appointment_day" placeholder="{{ __('Day') }}">
                </div>
                <div id="month">
                    <p>Month</p>

                    <input type="number"  name="appointment_month" placeholder="{{ __('Month') }}">
                </div>
                <div id="year">
                    <p>Year</p>

                    <input type="number"  name="appointment_year" placeholder="{{ __('Year') }}">
                </div>

                <br><br>

                <div class = "button">
                <button type = "submit" value = "info" id = "create"> Create Appointment </button>
                </div>
        </div>

            <br><br>
            <div class = "col-right">
                <label for="SelectTime">{{ __('Select Time') }}</label><br>
                                            <select class="form-control" name="appointment_time">
                                                <option value="8:00 a.m - 10:00 a.m">{{ __('8:00 a.m - 10:00 a.m') }}</option>
                                                <option value="10:00 a.m - 12:00 a.m">{{ __('10:00 a.m - 12:00 a.m') }}</option>
                                                <option value="2:00 p.m - 4:00 p.m">{{ __('2:00 p.m - 4:00 p.m') }}</option>
                                                <option value="4:00 p.m - 6:00 p.m">{{ __('4:00 p.m - 6:00 p.m') }}</option>
                                                <option value="7:00 p.m - 9:00 p.m">{{ __('7:00 p.m - 9:00 p.m') }}</option>
                                            </select>
            </div>


     <form>
</div>
</x-app-layout>


