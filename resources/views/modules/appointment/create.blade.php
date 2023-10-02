@extends('layouts/app-auth/contentNavbarLayout')

@section('title', 'Book Appointment')

@section('vendor-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <style>
        .unselectable-date {
            background-color: rgb(211, 211, 211);
            color: #eea0a0;
        }

        .remaining-slots {
            font-style: italic;
            font-weight: normal;
        }

        .form-check-label {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Book an Appointment</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="">Select a Category first</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror"
                                id="category" required>
                                <option value="">--Please Select--</option>
                                <option value="consultation" @selected(old('category') == 'consultation')>Consultation</option>
                                <option value="vaccination" @selected(old('category') == 'vaccination')>Vaccination</option>
                                <option value="baby check-up" @selected(old('category') == 'baby check-up')>Baby Check-up</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-0 text-center mb-2">Select Date</h5>
                                <div>
                                    <div class="mb-3" style="border: solid 1px; padding: 5px">
                                        <div id="calendar" style=""></div>
                                        @error('date_appointment')
                                            <div class="invalid-feedback mt-0" style="display: inline-block !important;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="date_appointment" required
                                        class="form-control @error('date_appointment') is-invalid @enderror)"
                                        id="selectedDate">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-2 text-center">Select Time</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2 mt-3">
                                            <label class="form-label fw-bold text-center">Morning Appointment</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="09:00:00" id="defaultRadio1">
                                            <label class="form-check-label" for="defaultRadio1">
                                                09:00 AM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="10:00:00" id="defaultRadio2">
                                            <label class="form-check-label" for="defaultRadio2">
                                                10:00 AM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="11:00:00" id="defaultRadio3">
                                            <label class="form-check-label" for="defaultRadio3">
                                                11:00 AM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="12:00:00" id="defaultRadio4">
                                            <label class="form-check-label" for="defaultRadio4">
                                                12:00 AM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2 mt-3">
                                            <label class="form-label fw-bold text-center">Afternoon Appointment</label>
                                        </div>
                                        <div class="form-check">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="13:00:00" id="defaultRadio5">
                                            <label class="form-check-label" for="defaultRadio5">
                                                01:00 PM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio" disabled
                                                value="14:00:00" id="defaultRadio6">
                                            <label class="form-check-label" for="defaultRadio6">
                                                02:00 PM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio"
                                                disabled value="15:00:00" id="defaultRadio7">
                                            <label class="form-check-label" for="defaultRadio7">
                                                03:00 PM <span class="remaining-slots italic"></span>
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input name="time_appointment" class="form-check-input" type="radio"
                                                disabled value="16:00:00" id="defaultRadio8">
                                            <label class="form-check-label" for="defaultRadio8">
                                                04:00 PM <span class="remaining-slots"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-5 mt-5 p-2">
                                    <div class="card">
                                        <button type="submit" id="submit" class="btn btn-primary">Submit
                                            Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('vendor-script')

@endsection
@push('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            const selectedDateInput = document.getElementById('selectedDate');
            const categorySelect = document.getElementById('category');
            const remainingSlots = document.getElementsByClassName('remaining-slots');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true, // allows selecting a date
                select: function(info) {
                    selectedDateInput.value = info.startStr;
                    console.log('Date input changed');
                    $.ajax({
                        url: 'get-appointments',
                        method: "GET",
                        data: {
                            date: selectedDateInput.value
                        },
                        success: function(response) {
                            console.log('AJAX request successful');
                            const appointments = JSON.parse(response);
                            const appointmentIds = appointments.map(appointment => {
                                const inputDate = new Date(appointment
                                    .date_appointment);
                                inputDate.setDate(inputDate.getDate() + 1);
                                const formattedDate = inputDate.toISOString()
                                    .slice(
                                        0, 10);
                                return {
                                    id: appointment.id,
                                    date_appointment: formattedDate,
                                    time_appointment: appointment
                                        .time_appointment
                                };
                            });

                            const morningAppointments = appointmentIds.filter(
                                appointment => {
                                    return appointment.time_appointment == '09:00:00' ||
                                        appointment.time_appointment == '10:00:00' ||
                                        appointment.time_appointment == '11:00:00' ||
                                        appointment.time_appointment == '12:00:00'
                                });

                            const afternoonAppointments = appointmentIds.filter(
                                appointment => {
                                    return appointment.time_appointment == '13:00:00' ||
                                        appointment.time_appointment == '14:00:00' ||
                                        appointment.time_appointment == '15:00:00' ||
                                        appointment.time_appointment == '16:00:00'
                                });

                            const morningRadioButtons = document.querySelectorAll(
                                'input[value="09:00:00"], input[value="10:00:00"], input[value="11:00:00"], input[value="12:00:00"]'
                            );

                            const afternoonRadioButtons = document.querySelectorAll(
                                'input[value="13:00:00"], input[value="14:00:00"], input[value="15:00:00"], input[value="16:00:00"]'
                            );

                            const category = categorySelect.value;

                            if (category == 'vaccination' || category == 'baby check-up') {
                                const selectedDate = new Date(selectedDateInput.value);
                                const selectedDateISO = new Date(selectedDate).toISOString()
                                    .slice(0, 10);
                                const day = selectedDate.getDay();

                                if (day == 3) {
                                    // disable morning appointments
                                    morningRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList.add(
                                            'text-danger');
                                    });

                                    // enable afternoon appointments
                                    afternoonRadioButtons.forEach(radio => {
                                        radio.disabled = false;
                                        radio.nextElementSibling.classList
                                            .remove(
                                                'text-danger');
                                    });

                                    const selectedDateAppointments = afternoonAppointments
                                        .filter(appointment => appointment
                                            .date_appointment === selectedDateISO);

                                    const timeSlots = ['13:00:00', '14:00:00', '15:00:00',
                                        '16:00:00'
                                    ];

                                    const updateSlotInformation = (timeSlot, maxSlots) => {
                                        const availableSlots = maxSlots -
                                            selectedDateAppointments
                                            .filter(appointment => appointment
                                                .time_appointment === timeSlot).length;

                                        const inputElement = document.querySelector(
                                            `input[value="${timeSlot}"]`);
                                        const labelElement = inputElement
                                            .nextElementSibling;

                                        labelElement.querySelector('.remaining-slots')
                                            .textContent =
                                            `(${availableSlots}/${maxSlots} slot${maxSlots === 1 ? '' : 's'} available)`;
                                        inputElement.disabled = availableSlots === 0;
                                        labelElement.classList.toggle('text-danger',
                                            availableSlots === 0);
                                    };

                                    for (const timeSlot of timeSlots) {
                                        updateSlotInformation(timeSlot, timeSlot ===
                                            '13:00:00' || timeSlot === '14:00:00' ? 2 :
                                            1);
                                    }
                                } else {
                                    morningRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList.add(
                                            'text-danger');
                                        // label .remaining-slots textContent set to Not Available
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });
                                    afternoonRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList
                                            .add(
                                                'text-danger');
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });
                                }
                            } else if (category == 'consultation') {
                                const selectedDate = new Date(selectedDateInput.value);
                                const selectedDateISO = new Date(selectedDate).toISOString()
                                    .slice(0, 10);
                                const day = selectedDate.getDay();
                                if (day == 1 || day == 5) { // Monday and Friday
                                    const morningTimeSlots = [
                                        '09:00:00', '10:00:00',
                                        '11:00:00', '12:00:00'
                                    ];
                                    const afternoonTimeSlots = [
                                        '13:00:00', '14:00:00',
                                        '15:00:00', '16:00:00'
                                    ];

                                    const enableTimeSlots = (timeSlots, appointments,
                                        selector) => {
                                        timeSlots.forEach(timeSlot => {
                                            const availableSlots = 1 -
                                                appointments.filter(
                                                    appointment => appointment
                                                    .date_appointment ===
                                                    selectedDateISO &&
                                                    appointment
                                                    .time_appointment ===
                                                    timeSlot).length;
                                            const inputElement = document
                                                .querySelector(
                                                    `input[value="${timeSlot}"]`
                                                );
                                            const labelElement = inputElement
                                                .nextElementSibling;

                                            inputElement.disabled =
                                                availableSlots === 0;
                                            labelElement.classList.toggle(
                                                'text-danger',
                                                availableSlots === 0);
                                            labelElement.querySelector(
                                                    '.remaining-slots')
                                                .textContent =
                                                `(${availableSlots}/1 slot available)`;
                                        });
                                    };

                                    enableTimeSlots(morningTimeSlots, morningAppointments,
                                        '09:00:00');
                                    enableTimeSlots(afternoonTimeSlots,
                                        afternoonAppointments, '13:00:00');

                                } else if (day == 3) { // Wednesday
                                    morningRadioButtons.forEach(radio => {
                                        radio.disabled = false;
                                        radio.nextElementSibling.classList.remove(
                                            'text-danger');
                                    });
                                    afternoonRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList.add(
                                            'text-danger');
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });

                                    const selectedDateAppointments = morningAppointments
                                        .filter(appointment => appointment
                                            .date_appointment === selectedDateISO);

                                    const timeSlots = ['09:00:00', '10:00:00', '11:00:00',
                                        '12:00:00'
                                    ];

                                    const updateSlotInformation = (timeSlot) => {
                                        const availableSlots = 1 -
                                            selectedDateAppointments
                                            .filter(appointment => appointment
                                                .time_appointment === timeSlot).length;

                                        const inputElement = document.querySelector(
                                            `input[value="${timeSlot}"]`);
                                        const labelElement = inputElement
                                            .nextElementSibling;

                                        labelElement.querySelector('.remaining-slots')
                                            .textContent =
                                            `(${availableSlots}/1 slot available)`;
                                        inputElement.disabled = availableSlots === 0;
                                        labelElement.classList.toggle('text-danger',
                                            availableSlots === 0);
                                    };

                                    for (const timeSlot of timeSlots) {
                                        updateSlotInformation(timeSlot);
                                    }
                                } else if (day == 2 || day == 4 || day ==
                                    6) { // Tuesday, Thursday, and Saturday
                                    morningRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList.add(
                                            'text-danger');
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });
                                    afternoonRadioButtons.forEach(radio => {
                                        radio.disabled = false;
                                        radio.nextElementSibling.classList
                                            .remove(
                                                'text-danger');
                                    });

                                    const selectedDateAppointments = afternoonAppointments
                                        .filter(appointment => appointment
                                            .date_appointment === selectedDateISO);

                                    const timeSlots = ['13:00:00', '14:00:00', '15:00:00',
                                        '16:00:00'
                                    ];

                                    const updateSlotInformation = (timeSlot) => {
                                        const availableSlots = 1 -
                                            selectedDateAppointments
                                            .filter(appointment => appointment
                                                .time_appointment === timeSlot).length;

                                        const inputElement = document.querySelector(
                                            `input[value="${timeSlot}"]`);
                                        const labelElement = inputElement
                                            .nextElementSibling;

                                        labelElement.querySelector('.remaining-slots')
                                            .textContent =
                                            `(${availableSlots}/1 slot available)`;
                                        inputElement.disabled = availableSlots === 0;
                                        labelElement.classList.toggle('text-danger',
                                            availableSlots === 0);
                                    };

                                    for (const timeSlot of timeSlots) {
                                        updateSlotInformation(timeSlot);
                                    }

                                } else {
                                    morningRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList.add(
                                            'text-danger');
                                        // label .remaining-slots textContent set to Not Available
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });
                                    afternoonRadioButtons.forEach(radio => {
                                        radio.disabled = true;
                                        radio.nextElementSibling.classList
                                            .add(
                                                'text-danger');
                                        radio.nextElementSibling.querySelector(
                                                '.remaining-slots').textContent =
                                            '(Not Available)';
                                    });
                                }
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                },
                selectOverlap: false,
                selectAllow: function(info) {
                    var today = new Date();
                    var yesterday = new Date(today);
                    yesterday.setDate(yesterday.getDate() - 1);
                    var day = info.start.getDay();
                    return day != 0 && info.start > yesterday;
                },
                selectMirror: false,
                unselectAuto: false,
                contentHeight: 410,
                dayCellClassNames: function(arg) {
                    if (arg.isPast) {
                        return 'unselectable-date';
                    }
                    if (arg.date.getDay() == 0) {
                        return 'unselectable-date';
                    }
                },
                headerToolbar: {
                    start: 'prev',
                    center: 'title',
                    end: 'next'
                },
            });
            calendar.render();
        });
    </script>
@endpush
