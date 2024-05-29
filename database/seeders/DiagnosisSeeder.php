<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diagnoses = [
            [
                'user_id' => 0,
                'category' => 'Headache',
                'symptoms' => 'Throbbing pain, sensitivity to light',
                'solution' => 'Take pain medication, rest in a quiet environment'
            ],
            [
                'user_id' => 0,
                'category' => 'Cold',
                'symptoms' => 'Sniffling, sneezing, sore throat',
                'solution' => 'Get plenty of rest, drink warm fluids, use over-the-counter medications'
            ],
            [
                'user_id' => 0,
                'category' => 'Fever',
                'symptoms' => 'High temperature, chills, sweating',
                'solution' => 'Take fever-reducing medication, stay hydrated, get plenty of rest'
            ],
            [
                'user_id' => 0,
                'category' => 'Cough',
                'symptoms' => 'Persistent coughing, chest discomfort',
                'solution' => 'Use cough suppressants, drink warm liquids, get plenty of rest'
            ],
            [
                'user_id' => 0,
                'category' => 'Flu',
                'symptoms' => 'Body aches, fatigue, sore throat, fever',
                'solution' => 'Take antiviral medication, get plenty of rest, stay hydrated'
            ],
            [
                'user_id' => 0,
                'category' => 'Stomach Ache',
                'symptoms' => 'Abdominal pain, nausea, vomiting',
                'solution' => 'Consume bland, easy-to-digest foods, take antacids or anti-nausea medication'
            ],
            [
                'user_id' => 0,
                'category' => 'Allergies',
                'symptoms' => 'Sneezing, itchy eyes, runny nose',
                'solution' => 'Take antihistamine medication, use nasal sprays, avoid allergen triggers'
            ],
            [
                'user_id' => 0,
                'category' => 'Sinus Infection',
                'symptoms' => 'Facial pain, congestion, headache',
                'solution' => 'Use decongestants, apply warm compresses, consider antibiotics if necessary'
            ],
            [
            'user_id' => 0,
            'category' => 'Muscle Strain',
            'symptoms' => 'Pain, swelling, limited range of motion',
            'solution' => 'Rest the affected area, apply ice, take anti-inflammatory medication'
            ],
            [
            'user_id' => 0,
            'category' => 'Skin Rash',
            'symptoms' => 'Itchy, red, or inflamed skin',
            'solution' => 'Use topical creams or ointments, avoid irritants, consider antihistamines'
                    ]
            ];

        \DB::table('diagnoses')->insert($diagnoses);
    }
}
