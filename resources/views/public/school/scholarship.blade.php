<!DOCTYPE html>
<html>
<head>
    <title>Scholarships</title>
</head>
<body>

Μάθημα: <h3>{{ $scholarship->study->name }}</h3>
<hr>
Επίπεδο: <h3>{{ $scholarship->level->name }}</h3>
<hr>
Σχολείο: <h3>{{ $scholarship->school->name() }}</h3>
<hr>
Κριτήρια: <h3>{{ $scholarship->criteria->name }}</h3>
<hr>
Πλάνο: <h3>{{ $scholarship->financial->plan }}</h3>
<hr>
Λεφτά: <h3>{{ $scholarship->financial_amount }}</h3>
<hr>
Terms(Προσοχή αυτό επιστρέφει html): <h4>{{ $scholarship->terms }}</h4>
<hr>
Exams(Boolean): <h4>{{ $scholarship->exams }}</h4>
<hr>
Exam Date(Carbon): <h4>{{ $scholarship->exams_date }}</h4>
<hr>
<h1>Προσοχή: Κάνε στο seeding της υποτροφίας να περιέχει τα πεδία terms και exams και exam_date</h1>
<hr>
</body>
</html>
