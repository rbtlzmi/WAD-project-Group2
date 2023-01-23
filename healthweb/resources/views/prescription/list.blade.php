<style>

        p{
            font-size: large;
            font-weight: bold;
            color: blue;
            text-decoration: underline;

        }

        .title{
            margin-left: 100px;
            margin-top: 20px;
            padding-top: 40px;
        }

        table {

            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top:20px;
            text-align: center;
            font-size: 15px;
            background: white;
        }

        .table-section{

            width: 90%;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            background: white;
            border-radius: 20px;
            padding-bottom : 30px;

        }

        th, td {
            padding: 5px;
            border-bottom: 1px solid #ddd
        }

        td{
            padding:10px;

        }

        .button{

            width: 10%;
            background-color: #E7C14D;
            color: white;
            padding: 10px;
            border-radius: 15px;
            text-align: center;
            margin-left: 140px;
            margin-top: 40px;
        }
    </style>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prescription') }}
        </h2>
    </x-slot>



    <div class = "table-section">
        <div class="title">
                    <p> Prescription List</p>
        </div>
        <table class="billing-table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Prescription</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <br>
            <tbody>
                @foreach ($prescriptions as $prescription)
                <tr>
                    <td>{{ $prescription->id }}</td>
                    <td>{{ $prescription->pres_id }}</td>
                    <td>{{ $prescription->patient_name }}</td>
                    <td>{{ $prescription->prescription_drug }}</td>
                    <td>{{ $prescription->updated_at }}</td>
                    <td><a href="{{ url('prescription/delete/'.$prescription->id) }}" class="btn btn-danger btn-circle btn-sm">Delete</a></td>
                    <td>

    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <br>
            <div class="button"> <a href="prescription">Create Prescription</a></div>
    </div>






</x-app-layout>
