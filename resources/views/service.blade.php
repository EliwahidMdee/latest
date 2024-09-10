@extends('layouts.app')

@section('content')
    <h1 style="display: flex; align-items: center; font-size: 24px; color: #6a11cb; margin-bottom: 20px;">
        <i class="fas fa-concierge-bell" style="margin-right: 10px;"></i> Services
    </h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div style="display: flex; flex-direction: row; justify-content: space-between; gap: 30px;">
        <!-- Form -->
        <form action="{{ route('services.store') }}" method="POST" style="background: #f8f9fa; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); color: #333; width: 350px;">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="service_name" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Service Name:</label>
                <input type="text" id="service_name" name="service_name" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="price" style="font-weight: bold; display: block; margin-bottom: 8px; font-size: 14px;">Price:</label>
                <input type="number" step="0.01" id="price" name="price" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; font-size: 14px; background-color: #fff; color: #333;">
            </div>
            <button type="submit" style="background-color: #007bff; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%;">Add Service</button>
        </form>

        <!-- Table -->
        <div class="container" style="width: calc(100% - 400px); padding: 20px; border-radius: 12px; background-color: #fff; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);">
            <table style="width: 100%; border-collapse: collapse; border-radius: 12px; overflow: hidden;">
                <thead style="background: #007bff; color: #ffffff;">
                <tr>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">ID</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Service Name</th>
                    <th style="padding: 15px; text-align: left; font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em;">Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $service)
                    <tr style="transition: background-color 0.3s ease;">
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #007bff; font-weight: bold;">{{ $service->id }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $service->service_name }}</td>
                        <td style="padding: 15px; text-align: left; font-size: 14px; color: #333;">{{ $service->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
