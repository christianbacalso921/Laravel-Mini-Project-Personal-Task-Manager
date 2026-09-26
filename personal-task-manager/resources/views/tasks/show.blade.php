<!DOCTYPE html>
<html>
<head>
    <title>View Task</title>

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
            width: 650px;
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

        .detail {
            background: #1f1f1f;

            padding: 15px;
            margin-bottom: 12px;

            border: 1px solid #444;
            border-radius: 8px;
        }

        .label {
            color: #999;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .value {
            color: #eee;
            font-size: 17px;
        }

        .status {
            display: inline-block;

            padding: 6px 12px;

            background: #444;

            border: 1px solid #777;
            border-radius: 20px;

            box-shadow:
                0 0 8px rgba(255,255,255,0.15);
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .button {
            padding: 12px 20px;

            background: #444;
            color: white;

            border: 1px solid #777;
            border-radius: 7px;

            text-decoration: none;

            transition: 0.3s;
        }

        .button:hover {
            background: #5a5a5a;

            box-shadow:
                0 0 12px rgba(255,255,255,0.35);
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Task Details</h1>

        <div class="detail">

            <div class="label">
                Task ID
            </div>

            <div class="value">
                {{ $task->id }}
            </div>

        </div>

        <div class="detail">

            <div class="label">
                Task Name
            </div>

            <div class="value">
                {{ $task->task_name }}
            </div>

        </div>

        <div class="detail">

            <div class="label">
                Description
            </div>

            <div class="value">
                {{ $task->description }}
            </div>

        </div>

        <div class="detail">

            <div class="label">
                Status
            </div>

            <div class="value">

                <span class="status">
                    {{ $task->status }}
                </span>

            </div>

        </div>

        <div class="detail">

            <div class="label">
                Due Date
            </div>

            <div class="value">
                {{ $task->due_date }}
            </div>

        </div>

        <div class="buttons">

            <a href="/tasks/{{ $task->id }}/edit"
               class="button">
                Edit Task
            </a>

            <a href="/tasks"
               class="button">
                Back to Tasks
            </a>

        </div>

    </div>

</div>

</body>
</html>