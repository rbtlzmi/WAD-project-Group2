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

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Staff
        </h2>
    </x-slot>

    <div class = "table-section">
        <div class="title">
                    <p> Staff List</p>
        </div>
        <table class="staff-table">

            <thead>
            <tr>
                <th scope="col">
                   Staff ID
                </th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Email
                </th>
                <th scope="col">
                    Phone Number
                </th>
                <th scope="col">
                    Address
                </th>
                <th scope="col">
                    Role ID
                </th>
            </tr>
            </thead>
            <br>
            <tbody>
            @foreach ($users as $user)
                <tr>

                    <td> ST{{ $user->id }}</td>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->email }}</td>

                    <td>{{ $user->phone_no }}</td>

                    <td>{{ $user->address }}</td>

                    <td>{{ $user->role_id }}</td>

                    </tr>
                    @endforeach
            </tbody>
        </table>
        <br>
</x-app-layout>
