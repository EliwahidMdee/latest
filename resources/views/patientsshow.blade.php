@extends('layouts.app')

@section('content')
    <div class="container" style="background: linear-gradient(135deg, #6a11cb, #2575fc); padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #ffffff;">
        <h1 style="font-size: 24px; color: #ffffff;">Patient Details</h1>
        <div class="card" style="background: linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-header">
                <h2>{{ $patient->first_name }} {{ $patient->last_name }}</h2>
            </div>
            <div class="card-body">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Date of Birth</th>
                        <td style="padding: 10px;">{{ $patient->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Gender</th>
                        <td style="padding: 10px;">{{ $patient->gender }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Phone Number</th>
                        <td style="padding: 10px;">{{ $patient->phone_number }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Address</th>
                        <td style="padding: 10px;">{{ $patient->address }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Email</th>
                        <td style="padding: 10px;">{{ $patient->email }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <h3 style="color: #ffffff;">Assigned Doctor</h3>
        <div class="card" style="linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-body">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Doctor Name</th>
                        <td style="padding: 10px;">{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Email</th>
                        <td style="padding: 10px;">{{ $doctor->email }}</td>
                    </tr>
                    <tr>
                        <th style="padding: 10px; text-align: left; linear-gradient(135deg, #6a11cb, #2575fc);">Phone Number</th>
                        <td style="padding: 10px;">{{ $doctor->phone_number }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <h3 style="color: #ffffff;">Symptoms</h3>
        <div class="card" style="linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-body">
                <!-- Display symptoms details -->
            </div>
        </div>

        <h3 style="color: #ffffff;">Tests</h3>
        <div class="card" style="linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-body">
                <!-- Display tests details -->
            </div>
        </div>

        <h3 style="color: #ffffff;">Prescriptions</h3>
        <div class="card" style="linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-body">
                <!-- Display prescriptions details -->
            </div>
        </div>

        <h3 style="color: #ffffff;">Billing</h3>
        <div class="card" style="linear-gradient(135deg, #6a11cb, #2575fc); color: #333;">
            <div class="card-body">
                <!-- Display billing details -->
            </div>
        </div>
    </div>
@endsection
