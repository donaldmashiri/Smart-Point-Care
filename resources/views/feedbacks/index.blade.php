@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Specialists Portal') }}</div>

                    <div class="card-body">
                        <div class="container my-5">
                            <h1>Specialist's Portal</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Receive and Store Patient Information</h2>
                                    <form id="patient-form">
                                        <div class="mb-3">
                                            <label for="patient-name" class="form-label">Patient Name</label>
                                            <input type="text" class="form-control" id="patient-name" value="John Doe">
                                        </div>
                                        <div class="mb-3">
                                            <label for="patient-condition" class="form-label">Patient Condition</label>
                                            <textarea class="form-control" id="patient-condition" rows="3">Patient is experiencing high blood pressure and chest pain.</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Patient Information</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h2>Retrieve and Interpret Patient Information</h2>
                                    <div class="mb-3">
                                        <label for="patient-info" class="form-label">Patient Information</label>
                                        <textarea class="form-control" id="patient-info" rows="3" readonly>John Doe: High blood pressure and chest pain</textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="interpretPatientInfo()">Interpret Patient Information</button>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <h2>Provide Feedback to PHCW and Patient</h2>
                                    <form id="feedback-form">
                                        <div class="mb-3">
                                            <label for="feedback-message" class="form-label">Feedback</label>
                                            <textarea class="form-control" id="feedback-message" rows="3">The patient should be referred to a cardiologist for further evaluation and treatment.</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Feedback</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div id="notifications"></div>
                            </div>
                        </div>

                        <script>
                            // Handle form submissions (dummy implementation)
                            document.getElementById('patient-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const patientName = document.getElementById('patient-name').value;
                                const patientCondition = document.getElementById('patient-condition').value;
                                storePatientInfo(patientName, patientCondition);
                                addNotification(`Patient information saved: ${patientName} - ${patientCondition}`);
                            });

                            document.getElementById('feedback-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const feedback = document.getElementById('feedback-message').value;
                                sendFeedbackToPhcwAndPatient(feedback);
                                addNotification(`Feedback sent: ${feedback}`);
                            });

                            function interpretPatientInfo() {
                                const patientInfo = document.getElementById('patient-info').value;
                                const interpretation = `Based on the provided information, the patient is experiencing ${patientInfo.split(': ')[1]}.`;
                                addNotification(interpretation);
                            }

                            function storePatientInfo(name, condition) {
                                // Simulate storing the patient information
                                document.getElementById('patient-info').value = `${name}: ${condition}`;
                            }

                            function sendFeedbackToPhcwAndPatient(feedback) {
                                // Simulate sending the feedback to the PHCW and the patient
                                console.log(`Feedback sent to PHCW and patient: ${feedback}`);
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
