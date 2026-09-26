<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #1b1b1b;
            color: white;
        }

        .container {
            width: 600px;
            max-width: 90%;
            margin: 60px auto;
        }

        .card {
            background: #292929;
            padding: 35px;
            border: 1px solid #555;
            border-radius: 14px;

            box-shadow:
                0 0 15px rgba(255,255,255,0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;

            text-shadow:
                0 0 10px rgba(255,255,255,0.25);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ddd;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;

            background: #1f1f1f;
            color: white;

            border: 1px solid #555;
            border-radius: 7px;

            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #aaa;

            box-shadow:
                0 0 8px rgba(255,255,255,0.25);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .button {
            padding: 12px 20px;

            background: #444;
            color: white;

            border: 1px solid #777;
            border-radius: 7px;

            cursor: pointer;
            text-decoration: none;

            transition: 0.3s;
        }

        .button:hover {
            background: #5a5a5a;

            box-shadow:
                0 0 12px rgba(255,255,255,0.35);
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Edit Task</h1>

        <form action="/tasks/{{ $task->id }}" method="POST">

            @csrf

            @method('PUT')

            <div class="form-group">
                <label>Task Name</label>

                <input type="text"
                       name="task_name"
                       value="{{ $task->task_name }}"
                       required>
            </div>

            <div class="form-group">
                <label>Description</label>

                <textarea name="description">{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Status</label>

                <select name="status">

                    <option value="Pending"
                        {{ $task->status == 'Pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option value="Completed"
                        {{ $task->status == 'Completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                </select>
            </div>

            <div class="form-group">
                <label>Due Date</label>

                <input type="date"
                       name="due_date"
                       value="{{ $task->due_date }}">
            </div>

            <div class="buttons">

                <button type="submit" class="button">
                    Update Task
                </button>

                <a href="/tasks" class="button">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>