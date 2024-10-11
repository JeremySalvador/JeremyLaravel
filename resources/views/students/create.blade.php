<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Student</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
            color: #2c3e50;
        }

        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 12px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="number"]:focus {
            border-color: #34495e;
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 73, 94, 0.4);
        }

        .submit-btn {
            width: 100%;
            padding: 12px 20px;
            background-color: #34495e;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2c3e50;
            transform: translateY(-2px);
        }

        .submit-btn:active {
            background-color: #22313f;
            transform: translateY(0);
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            input[type="text"], input[type="email"], input[type="number"] {
                font-size: 14px;
                padding: 10px;
            }

            .submit-btn {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Create a Student</h1>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        @method('post')
        <div class="form-group">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="email" name="email" placeholder="Student Email" required>
            <input type="number" name="age" placeholder="Student Age" required>
        </div>
        <button type="submit" class="submit-btn">Create Student</button>
    </form>
</div>

</body>
</html>
