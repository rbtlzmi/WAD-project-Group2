<style>

  .col{
      width:80%;
      padding: 20px;
      background-color: white;
      border: 1px solid #F4F8EC;
      border-radius: 15px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      color: grey;
      z-index: 1;
  }

    p{
      font-size: large;
      font-weight: bold;
      color: blue;
      text-decoration: underline;
    }

    input[type=text]{
      border-radius: 15px;
      border-color: grey;
      width: 100%;
      margin-top: 5px;
    }

    #create{
      width: 15%;
      background-color: #E7C14D;
      color: white;
      padding: 10px;
      border-radius: 15px;
    }

    .button{

    width: 200px;
    background-color: #535151b8;
    color: white;
    padding: 10px;
    border-radius: 15px;
    text-align: center;
    margin-left: 990px;
    margin-top: -45px;
    }

    #patient-name {

    border-radius: 15px;
    border-color: grey;
    width: 100%;
    margin-top: 5px;
    }

  </style>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prescription') }}
        </h2>
    </x-slot>

    <form action="addtoprescription" method="post" role="form" enctype="multipart/form-data">
        @csrf



        <div class="col">

        <p>Information</p> <br>

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


            <div class="form-group">
            <label for="patient">{{ __('Prescription') }}</label> <br>
              <input type="text" name="prescription_drug" class="form-control" id="prescription_drug" placeholder="Prescription of Drug" required>
            </div>

            <br><br>

          <button type="submit" id="create" class="btn btn-primary">Submit</button>

          </div>
        </div>
    </form>

</x-app-layout>
