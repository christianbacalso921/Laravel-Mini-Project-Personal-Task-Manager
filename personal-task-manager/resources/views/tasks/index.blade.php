<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #1b1b1b;
            color: #ffffff;
        }

        .container {
            width: 90%;
            margin: 50px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        h1 {
            margin: 0;
            font-size: 32px;
            color: #f5f5f5;
            text-shadow: 0 0 10px rgba(255,255,255,0.25);
        }

        .add-button {
            display: inline-block;
            padding: 12px 20px;
            background: #444444;
            color: white;
            text-decoration: none;
            border: 1px solid #777777;
            border-radius: 8px;

            box-shadow:
                0 0 8px rgba(255,255,255,0.15);

            transition: 0.3s;
        }

        .add-button:hover {
            background: #666666;

            box-shadow:
                0 0 12px rgba(255,255,255,0.45),
                0 0 25px rgba(255,255,255,0.15);
        }

        .table-box {
            background: #292929;
            border: 1px solid #555555;
            border-radius: 12px;
            padding: 20px;

            box-shadow:
                0 0 15px rgba(255,255,255,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #3a3a3a;
            color: #ffffff;
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #666666;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #444444;
            color: #dddddd;
        }

        tr:hover {
            background: #333333;

            box-shadow:
                0 0 10px rgba(255,255,255,0.08);
        }

        .action {
            display: inline-block;
            padding: 7px 12px;
            margin-right: 5px;

            background: #3d3d3d;
            color: white;

            border: 1px solid #666666;
            border-radius: 6px;

            text-decoration: none;

            transition: 0.3s;
        }

        .action:hover {
            background: #5a5a5a;

            box-shadow:
                0 0 10px rgba(255,255,255,0.35);
        }

        .delete-button {
            padding: 7px 12px;

            background: #333333;
            color: white;

            border: 1px solid #777777;
            border-radius: 6px;

            cursor: pointer;

            transition: 0.3s;
        }

        .delete-button:hover {
            background: #555555;

            box-shadow:
                0 0 10px rgba(255,255,255,0.35);
        }

        .status {
            display: inline-block;
            padding: 5px 10px;

            background: #444444;
            border: 1px solid #777777;

            border-radius: 20px;

            font-size: 13px;

            box-shadow:
                0 0 8px rgba(255,255,255,0.12);
        }

    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <h1>Personal Task Manager</h1>

        <a href="/tasks/create" class="add-button">
            + Add Task
        </a>

    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>

            @foreach ($tasks as $task)

            <tr>

                <td>{{ $task->id }}</td>

                <td>{{ $task->task_name }}</td>

                <td>{{ $task->description }}</td>

                <td>
                    <span class="status">
                        {{ $task->status }}
                    </span>
                </td>

                <td>{{ $task->due_date }}</td>

                <td>

                    <a href="/tasks/{{ $task->id }}"
                       class="action">
                        View
                    </a>

                    <a href="/tasks/{{ $task->id }}/edit"
                       class="action">
                        Edit
                    </a>

                    <form action="/tasks/{{ $task->id }}"
                          method="POST"
                          style="display:inline;">

                        @csrf

                        @method('DELETE')

                        <button type="submit"
                                class="delete-button">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>