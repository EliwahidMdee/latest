<!-- resources/views/doctors/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 style="display: flex; align-items: center; font-size: 24px; color: #6a11cb; margin-bottom: 20px;">
        <i class="fas fa-user-md" style="margin-right: 10px;"></i> Doctors
    </h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px;">
        <!-- Form -->
        <form action="{{ route('doctors.store') }}" method="POST" style="background: linear-gradient(135deg, #6a11cb, #2575fc); padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #ffffff; width: 350px;">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="first_name" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">First Name:</label>
                <input type="text" id="first_name" name="first_name" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="last_name" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="specialty" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Specialty:</label>
                <input type="text" id="specialty" name="specialty" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="phone_number" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Email:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="hired_date" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Hired Date:</label>
                <input type="date" id="hired_date" name="hired_date" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <button type="submit" style="background-color: #ff4b5c; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%;">Add Doctor</button>
        </form>

        <!-- Table -->
        <div class="container" style="width: calc(100% - 400px); padding: 20px; border-radius: 12px; background-color: #f0f1f6; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">
            <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden;">
                <thead style="background: linear-gradient(135deg, #42a5f5, #478ed1); color: #ffffff;">
                <tr>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">First Name</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Last Name</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Specialty</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Phone Number</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Email</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Hired Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($doctors as $doctor)
                    <tr style="transition: background-color 0.3s ease-in-out">
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #42a5f5; font-weight: bold;">{{ $doctor->doctor_id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $doctor->first_name }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $doctor->last_name }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $doctor->specialty }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $doctor->phone_number }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333; word-break: break-word;">{{ $doctor->email }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $doctor->hired_date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
