@extends('user.layout.main')

@section('content')
<div class="section courses" style="background-color: #f9f6ff; padding: 60px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-4">
        <div class="section-heading" style="color: #7a6ad8;">
          <h6 style="color: #7a6ad8;">Mulai Belajar sekarang</h6>
          <h2>Pilih Paket Belajar Sesuai Targetmu</h2>
          <p>Sesuaikan durasi belajarmu dengan tujuan dan ketersediaan waktumu.</p>
        </div>
      </div>

      @php
        $courses = [
          [
            'name' => 'TRIAL',
            'modules' => '1 Modul Mingguan',
            'bonus' => ['Quiz 1 Kali'],
            'duration' => '1 Hari',
            'price' => 'FREE',
            'url' => url('/register'),
            'is_featured' => true
          ],
          [
            'name' => 'LITE',
            'modules' => '12 Modul Mingguan',
            'bonus' => ['Quiz 3 Kali', 'Sertifikat Digital'],
            'duration' => '3 Bulan',
            'price' => 'Rp 99.000',
            'url' => url('/register'),
            'is_featured' => false
          ],
          [
            'name' => 'Standard',
            'modules' => '24 Modul Mingguan',
            'bonus' => ['Quiz 6 Kali', 'Sertifikat Digital'],
            'duration' => '6 Bulan',
            'price' => 'Rp 179.000',
            'url' => url('/register'),
            'is_featured' => false
          ],
          [
            'name' => 'Pro',
            'modules' => '48 Modul Mingguan',
            'bonus' => ['Quiz 12 Kali', 'Sertifikat Digital'],
            'duration' => '12 Bulan',
            'price' => 'Rp 299.000',
            'url' => url('/register'),
            'is_featured' => false
          ],
        ];
      @endphp

{{-- Loop semua paket --}}
@foreach ($courses as $course)
  @php
    $isTrial = strtolower($course['name']) === 'trial';
  @endphp

  <div class="{{ $course['is_featured'] ? 'col-lg-12' : 'col-lg-4 col-md-6' }} mb-4">
    <div class="card {{ $course['is_featured'] ? 'shadow' : 'shadow-sm' }}" 
         style="border-radius: {{ $course['is_featured'] ? '20px' : '15px' }}; border: {{ $course['is_featured'] ? '2px' : '1px' }} solid #7a6ad8; background-color: #fff;">
      <div class="card-body text-center {{ $course['is_featured'] ? 'd-flex flex-column flex-md-row align-items-center justify-content-between' : '' }}" style="padding: 30px;">
        
        <div class="{{ $course['is_featured'] ? 'text-md-left text-center mb-3 mb-md-0' : '' }}">
          <span class="category" style="font-weight: bold; font-size: {{ $course['is_featured'] ? '1.5rem' : '1.2rem' }}; color: #7a6ad8;">
            {{ $course['name'] }} {{ $course['is_featured'] ? 'Package' : '' }}
          </span>
          <h4 class="mt-2 mt-3">{{ $course['modules'] }}</h4>
          <ul class="list-unstyled mt-2 mt-3 mb-2 mb-3" style="color: #555; font-size: {{ $course['is_featured'] ? '1rem' : '0.9rem' }};">
            @foreach ($course['bonus'] as $bonus)
              <li>• {{ $bonus }}</li>
            @endforeach
          </ul>
          <p><strong>Durasi:</strong> {{ $course['duration'] }}</p>
        </div>

        <div>
          <p style="font-size: {{ $course['is_featured'] ? '1.5rem' : '1.2rem' }}; font-weight: 700; color: #7a6ad8;">
            {{ $course['price'] }}
          </p>

          @if ($isTrial)
            <a href="{{ url('/register') }}" class="btn btn-primary" style="background-color: #7a6ad8; border:none; border-radius: 30px; padding: 12px 30px;">
              Belajar Sekarang
            </a>
          @else
            <form action="{{ route('checkout') }}" method="POST">
              @csrf
              <input type="hidden" name="package" value="{{ $course['name'] }}">
              <input type="hidden" name="price" value="{{ $course['price'] }}">
              <button type="submit" class="btn btn-primary" style="background-color: #7a6ad8; border:none; border-radius: 30px; padding: 12px 30px;">
                Belajar Sekarang
              </button>
            </form>
          @endif<form action="{{ route('checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="package" value="{{ $course['name'] }}">
            <input type="hidden" name="price" value="{{ $course['price'] }}">
            <button type="submit" class="btn btn-primary">
              Belajar Sekarang
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
