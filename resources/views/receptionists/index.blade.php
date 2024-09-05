@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="display: flex; align-items: center; font-size: 24px; color: #6a11cb; margin-bottom: 20px;">
            <i class="fas fa-user-nurse" style="margin-right: 10px;"></i> Receptionists
        </h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px;">
            <!-- Form -->
            <form action="{{ route('receptionists.store') }}" method="POST" style="background: #f8f9fa; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #333; width: 350px;">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label for="first_name" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="last_name" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="email" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Email:</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="phone_number" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="hired_date" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Hired Date:</label>
                    <input type="date" id="hired_date" name="hired_date" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
                </div>
                <button type="submit" style="background-color: #007bff; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%;">Add Receptionist</button>
            </form>

            <!-- Table -->
            <div class="container" style="width: calc(100% - 400px); padding: 20px; border-radius: 12px; background-color: #fff; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
                <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden;">
                    <thead style="background: #007bff; color: #ffffff;">
                    <tr>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">ID</th>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">First Name</th>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Last Name</th>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Email</th>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Phone Number</th>
                        <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Hired Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($receptionists as $receptionist)
                        <tr style="transition: background-color 0.3s ease;">
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #007bff; font-weight: bold;">{{ $receptionist->id }}</td>
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $receptionist->first_name }}</td>
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $receptionist->last_name }}</td>
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $receptionist->email }}</td>
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $receptionist->phone_number }}</td>
                            <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $receptionist->hired_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
