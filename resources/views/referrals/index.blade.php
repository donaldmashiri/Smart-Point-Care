@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Referral Management') }}</div>

                    <div class="card-body">
                        <div class="container my-5">
                            <h1>Referral Management</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Refer Patient</h2>
                                    <form id="referral-form">
                                        <div class="mb-3">
                                            <label for="patient-name" class="form-label">Patient Name</label>
                                            <input type="text" class="form-control" id="patient-name" value="Jane Smith">
                                        </div>
                                        <div class="mb-3">
                                            <label for="referral-reason" class="form-label">Reason for Referral</label>
                                            <textarea class="form-control" id="referral-reason" rows="3">Patient requires specialized treatment for a chronic condition.</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="referral-center" class="form-label">Referral Center</label>
                                            <select class="form-select" id="referral-center">
                                                <option value="center1">Specialty Clinic</option>
                                                <option value="center2">Regional Medical Center</option>
                                                <option value="center3">University Hospital</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Referral</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h2>Referral Status</h2>
                                    <div class="mb-3">
                                        <label for="referral-status" class="form-label">Current Referral Status</label>
                                        <input type="text" class="form-control" id="referral-status" value="Pending" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="referral-update" class="form-label">Update Referral Status</label>
                                        <select class="form-select" id="referral-update">
                                            <option value="pending">Pending</option>
                                            <option value="accepted">Accepted</option>
                                            <option value="rejected">Rejected</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                        <button type="button" class="btn btn-primary mt-2" onclick="updateReferralStatus()">Update Status</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div id="notifications"></div>
                            </div>
                        </div>

                        <script>
                            // Handle form submissions (dummy implementation)
                            document.getElementById('referral-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const patientName = document.getElementById('patient-name').value;
                                const referralReason = document.getElementById('referral-reason').value;
                                const referralCenter = document.getElementById('referral-center').value;
                                submitReferral(patientName, referralReason, referralCenter);
                                addNotification(`Referral submitted for ${patientName} to ${referralCenter}`);
                            });

                            function updateReferralStatus() {
                                const newStatus = document.getElementById('referral-update').value;
                                document.getElementById('referral-status').value = newStatus;
                                addNotification(`Referral status updated to: ${newStatus}`);
                            }

                            function submitReferral(name, reason, center) {
                                // Simulate submitting the referral
                                console.log(`Referral submitted for ${name} to ${center} due to ${reason}`);
                                document.getElementById('referral-status').value = 'Pending';
                            }

                            function addNotification(message) {
                                const notificationElement = document.createElement('div');
                                notificationElement.classList.add('alert', 'alert-success', 'mt-3');
                                notificationElement.textContent = message;
                                document.getElementById('notifications').appendChild(notificationElement);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
