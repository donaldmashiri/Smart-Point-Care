@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Sense, Store and Notify Application') }}</div>

                    <div class="card-body">
                        <div class="container my-5">
                            <h1>Sense, Store and Notify Application</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Communication with PHCPS</h2>
                                    <form id="phcps-form">
                                        <div class="mb-3">
                                            <label for="phcps-message" class="form-label">Message</label>
                                            <textarea class="form-control" id="phcps-message" rows="3">Patient has high blood pressure, please advise.</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send to PHCPS</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h2>Communication with Specialists</h2>
                                    <form id="specialist-form">
                                        <div class="mb-3">
                                            <label for="specialist-message" class="form-label">Message</label>
                                            <textarea class="form-control" id="specialist-message" rows="3">Patient needs further evaluation for heart condition.</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send to Specialists</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <h2>Communication with Referral Centers</h2>
                                    <form id="referral-form">
                                        <div class="mb-3">
                                            <label for="referral-message" class="form-label">Message</label>
                                            <textarea class="form-control" id="referral-message" rows="3">Patient needs to be referred to a specialized treatment center.</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send to Referral Centers</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h2>Notifications</h2>
                                    <div id="notifications">
                                        <div class="alert alert-success mt-3">Message sent to PHCPS</div>
                                        <div class="alert alert-success mt-3">Message sent to Specialists</div>
                                        <div class="alert alert-success mt-3">Message sent to Referral Centers</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Handle form submissions (dummy implementation)
                            document.getElementById('phcps-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const message = document.getElementById('phcps-message').value;
                                addNotification(`Message sent to PHCPS: ${message}`);
                            });

                            document.getElementById('specialist-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const message = document.getElementById('specialist-message').value;
                                addNotification(`Message sent to Specialists: ${message}`);
                            });

                            document.getElementById('referral-form').addEventListener('submit', function(event) {
                                event.preventDefault();
                                const message = document.getElementById('referral-message').value;
                                addNotification(`Message sent to Referral Centers: ${message}`);
                            });

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
