<!-- File: `resources/views/patients/index.blade.php` -->
@extends('layouts.app')

@section('content')
    <h1 style="display: flex; align-items: center; font-size: 24px; color: #6a11cb; margin-bottom: 20px;">
        <i class="fas fa-user-injured" style="margin-right: 10px;"></i> Patients
    </h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px;">
        <!-- Form -->
        <form action="{{ route('patients.store') }}" method="POST" style="background: linear-gradient(135deg, #6a11cb, #2575fc); padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #ffffff; width: 350px;">
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
                <label for="date_of_birth" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="gender" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Gender:</label>
                <select id="gender" name="gender" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div style="margin-bottom: 20px;">
                <label for="phone_number" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="address" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Address:</label>
                <input type="text" id="address" name="address" style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Email:</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <button type="submit" style="background-color: #ff4b5c; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%;">Add Patient</button>
        </form>

        <!-- Table -->
        <div class="container" style="width: calc(100% - 400px); padding: 20px; border-radius: 12px; background-color: #f0f1f6; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">
            <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden;">
                <thead style="background: linear-gradient(135deg, #42a5f5, #478ed1); color: #ffffff;">
                <tr>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">First Name</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Last Name</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Date of Birth</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Gender</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Phone Number</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Address</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Email</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($patients as $patient)
                    <tr style="transition: background-color 0.3s ease;">
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #42a5f5; font-weight: bold;">{{ $patient->id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->first_name }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->last_name }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->date_of_birth }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->gender }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->phone_number }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $patient->address }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333; word-break: break-word;">{{ $patient->email }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">
                            <a href="{{ route('patients.show', ['patient' => $patient->id]) }}" style="background-color: #42a5f5; color: #ffffff; padding: 5px 10px; border-radius: 10px; margin-right: 5px; text-decoration: none; transition: background-color 0.3s ease;">View Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
