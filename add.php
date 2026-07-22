<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>Add Student</h2>

    <form action="save.php" method="POST">

        <div class="mb-3">
            <label>Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label>Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label>Phone</label>

            <input
                type="text"
                name="phone"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label>Course</label>

            <input
                type="text"
                name="course"
                class="form-control"
            >
        </div>

        <button class="btn btn-primary">
            Save Student
        </button>

    </form>

</div>

</body>
</html>