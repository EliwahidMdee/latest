<!-- resources/views/appointments/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 style="display: flex; align-items: center; font-size: 24px; color: #6a11cb; margin-bottom: 20px;">
        <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i> Appointments
    </h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px;">
        <!-- Form -->
        <form action="{{ route('appointments.store') }}" method="POST" style="background: linear-gradient(135deg, #6a11cb, #2575fc); padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #ffffff; width: 350px;">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="patient_id" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Patient ID:</label>
                <input type="text" id="patient_id" name="patient_id" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="doctor_id" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Doctor ID:</label>
                <input type="text" id="doctor_id" name="doctor_id" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="appointment_date" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Appointment Date:</label>
                <input type="date" id="appointment_date" name="appointment_date" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="purpose" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Purpose:</label>
                <input type="text" id="purpose" name="purpose" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="status" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Status:</label>
                <select id="status" name="status" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; font-size: 14px; background-color: #f0f1f6; color: #333;">
                    <option value="Scheduled">Scheduled</option>
                    <option value="Completed">Completed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>
            <button type="submit" style="background-color: #ff4b5c; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%;">Add Appointment</button>
        </form>

        <!-- Table -->
        <div class="container" style="width: calc(100% - 400px); padding: 20px; border-radius: 12px; background-color: #fff; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden;">
                <thead style="background: linear-gradient(135deg, #42a5f5, #478ed1); color: #ffffff;">
                <tr>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Patient ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Doctor ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Appointment Date</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Purpose</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($appointments as $appointment)
                    <tr style="transition: background-color 0.3s ease;">
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #42a5f5; font-weight: bold;">{{ $appointment->id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $appointment->patient_id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $appointment->doctor_id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $appointment->appointment_date }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $appointment->purpose }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $appointment->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
