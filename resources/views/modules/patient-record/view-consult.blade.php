@extends('layouts/app-auth/contentNavbarLayout')

@section('title', 'Appointment Checkup')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">

@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <form action="{{ route('walkin-appointment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="card-header d-flex align-items-center justify-content-between ">
                        <div class="card-title p-0 mb-0 d-flex align-item-center"><a href="{{ route('app-checkup.index') }}"
                                class="btn p-0"><i class='bx bx-arrow-back'></i></a>
                            <h5 class="card-header ms-2 p-0 text-uppercase" style="line-height: 1.5;"><span
                                    class="text-primary">{{ $patient_rec->full_name }}</span> Medical History
                                Information</h5>
                        </div>
                        <div class="card-tool">
                            {{-- <a href="" class="btn btn-primary" style="color: #ffff;">ADD WALK-IN APPOINTMENT</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input readonly type="text"
                                        class="form-control @error('firstname') is-invalid @enderror" placeholder=""
                                        name="firstname" value="{{ $patient_rec->firstname }}">
                                    @error('firstname')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Middle Name</label>
                                    <input readonly type="text"
                                        class="form-control @error('middlename') is-invalid @enderror"
                                        value="{{ $patient_rec->middlename }}" placeholder="" name="middlename">
                                    @error('middlename')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input readonly type="text"
                                        class="form-control @error('lastname') is-invalid @enderror"
                                        value="{{ $patient_rec->lastname }}" placeholder="" name="lastname">
                                    @error('lastname')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="form-label">Mother Name</label>
                                  <input readonly type="text"
                                      class="form-control @error('lastname') is-invalid @enderror"
                                      value="{{ $patient_rec->mother_name }}" placeholder="" name="lastname">
                                  @error('lastname')
                                      <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="form-label">Father Name</label>
                                  <input readonly type="text"
                                      class="form-control @error('lastname') is-invalid @enderror"
                                      value="{{ $patient_rec->father_name }}" placeholder="" name="lastname">
                                  @error('lastname')
                                      <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control @error('contact_number') is-invalid @enderror"
                                    value="{{ $patient_rec->contact_number }}" placeholder=""
                                    name="contact_number">
                                @error('contact_number')
                                    <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                      </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Birthdate</label>
                                    <input readonly type="date" id="birthdate"
                                        class="form-control @error('birthdate') is-invalid @enderror"
                                        value="{{ $patient_rec->birthdate->format('Y-m-d') }}" placeholder=""
                                        name="birthdate">
                                    @error('birthdate')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Age</label>
                                    <input readonly type="number" id="age"
                                        class="form-control text-end @error('age') is-invalid @enderror"
                                        value="{{ $patient_rec->age }}" placeholder="0" name="age">
                                    @error('age')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Gender</label>
                                    <select disabled id=""
                                        class="form-select @error('gender') is-invalid @enderror" name="gender">
                                        <option disabled selected>--Please Select--</option>
                                        @foreach ($gender as $genders)
                                            <option value="{{ $genders }}" @selected($genders == $patient_rec->gender)>
                                                {{ $genders }}</option>
                                        @endforeach
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input readonly type="text" id=""
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ $patient_rec->address }}" placeholder="" name="address">
                                    @error('address')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="form-label">Type of Consultation</label>
                                    <select disabled id=""
                                        class="form-select @error('type_consult') is-invalid @enderror"
                                        name="type_consult">
                                        <option value="">--Please Select--</option>
                                        @if (date('Wed') == 'Wed')
                                            @foreach ($consult as $consults)
                                                <option value="{{ $consults }}" @selected($walkin->type_consult == $consults)>
                                                    {{ $consults }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($checkup as $checkups)
                                                <option value="{{ $checkups }}" @selected($walkin->type_consult == $checkups)>
                                                    {{ $checkups }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date of Consultation</label>
                                    <input readonly type="date" id=""
                                        class="form-control @error('date_consultation') is-invalid @enderror"
                                        placeholder="" value="{{ $walkin->date_consultation->format('Y-m-d') }}"
                                        name="date_consultation">
                                    @error('date_consultation')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Time of Consultation</label>
                                    <input readonly type="time" id=""
                                        class="form-control @error('time_consultation') is-invalid @enderror"
                                        placeholder="" value="{{ date('H:i') }}" name="time_consultation">
                                    @error('time_consultation')
                                        <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>


        </div>

        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="card p-2">
                    <div class="card-header d-flex align-items-center justify-content-between ">
                        <div class="card-title p-0 mb-0 d-flex align-item-center">
                            <h5 class="card-header ms-2 p-0 text-uppercase" style="line-height: 1.5;"><span
                                    class="text-primary">Medical History
                                    Information</h5>
                        </div>
                        <div class="card-tool">
                            {{-- <a href="" class="btn btn-primary" style="color: #ffff;">ADD WALK-IN APPOINTMENT</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        @forelse ($patient_appointment as $patient_app)
                            <div class="accordion" id="accordionExample">
                                <div class="card accordion-item {{ $loop->first ? 'active' : '' }}">
                                    <h2 class="accordion-header" id="headingTwo{{ $patient_app->id }}">
                                        <button type="button" class="accordion-button collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#accordion{{ $patient_app->id }}"
                                            aria-expanded="false" aria-controls="accordion{{ $patient_app->id }}"
                                            role="tabpanel">
                                            <h6 class="mb-0 text-uppercase">DATE:
                                                {{ $patient_app?->date_consultation?->format('F d, Y') ?? $patient_app->date_appointment->format('F d, Y') }}, TYPE OF CONSULTATION: {{ $patient_app->category }}</h6>
                                        </button>
                                    </h2>
                                    <div id="accordion{{ $patient_app->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="headingTwo{{ $patient_app->id }}"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="row mt-2">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Weight</label>
                                                            <input readonly type="number" id="" step="0.01"
                                                                class="form-control text-end @error('weight') is-invalid @enderror"
                                                                value="{{ $patient_app?->walkInConsult?->weight ?? $patient_app->bookAppConsult->weight }}"
                                                                placeholder="" name="weight">
                                                            @error('weight')
                                                                <div class="invalid-feedback mt-0"
                                                                    style="display: inline-block !important;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Height</label>
                                                            <input readonly type="number" id="" step="0.01"
                                                                class="form-control text-end @error('height') is-invalid @enderror"
                                                                value="{{ $patient_app?->walkInConsult?->height ?? $patient_app->bookAppConsult->height }}"
                                                                placeholder="" name="height">
                                                            @error('height')
                                                                <div class="invalid-feedback mt-0"
                                                                    style="display: inline-block !important;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <div class="form-group">
                                                          <label class="form-label">Blood Pressure</label>
                                                          <input readonly type="text" id=""
                                                              class="form-control text-end @error('height') is-invalid @enderror"
                                                              value="{{ $patient_app?->walkInConsult?->blood_pressure ?? $patient_app->bookAppConsult->blood_pressure }}"
                                                              placeholder="" name="height">
                                                          @error('height')
                                                              <div class="invalid-feedback mt-0"
                                                                  style="display: inline-block !important;">
                                                                  {{ $message }}
                                                              </div>
                                                          @enderror
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                              <h6 class="mb-1">Medication In Take:</h6>
                                              <p class="mb-1">{{ $patient_app?->walkInConsult?->medication_intake ?? $patient_app->bookAppConsult->medication_intake}}</p>
                                              <h6 class="mb-1">Medical History</h6>
                                              <p class="mb-1">{{ $patient_app?->walkInConsult?->medical_history ?? $patient_app->bookAppConsult->medical_history }}</p>
                                              <h6 class="mb-1">Vaccine Received:</h6>
                                              <p class="mb-1">{{ $patient_app?->walkInConsult?->vaccine_received ?? $patient_app->bookAppConsult->vaccince_received }}</p>
                                              <h6 class="mb-1">Diagnosis</h6>
                                              <p class="mb-1">{{ $patient_app?->walkInConsult?->diagnosis ?? $patient_app->bookAppConsult->diagnosis }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-center text-uppercase fw-bold">NO RECORD OF MEDICAL HISTORY</p>
                                @endforelse
                    </div>
                </div>
            </div>
        </div>


        </div>
    </form>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            $("#birthdate").on("change", function() {
                const birthdate = new Date($(this).val());
                const currentDate = new Date();
                const age = currentDate.getFullYear() - birthdate.getFullYear();

                // Check if the birthday hasn't occurred this year yet
                if (
                    currentDate.getMonth() < birthdate.getMonth() ||
                    (currentDate.getMonth() === birthdate.getMonth() &&
                        currentDate.getDate() < birthdate.getDate())
                ) {
                    age--;
                }

                $("#age").val(age);
            });
        });
    </script>
@endsection
