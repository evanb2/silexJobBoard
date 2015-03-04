<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobBoard.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Job Board</title>
        </head>
        <body>
            <div class='container'>
                <h1>Job Posting<h1>
                <p>Enter your job to post it in the Job Board.</p>
                <form action='view_job'>
                    <div class='form-group'>
                        <label for='title'>Enter Job Title: </label>
                        <input id='title' name='title' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='description'>Enter description of the job: </label>
                        <input id='description' name='description' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='contact'>Enter your contact information: </label>
                        <input id='contact' name='contact' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='salary'>Enter salary: </label>
                        <input id='salary' name='salary' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Post</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/view_job", function() {
        $new_job = new JobOpening($_GET['title'], $_GET['description'], $_GET['salary'],
            $_GET['contact']);
        $jobs = array ($new_job);

        $output="";
        foreach ($jobs as $post) {
            $output = $output . "<div class='row'>
                <div class='col-md-6'>
                    <h2>" . $post->getTitle() . "</h2>
                    <p>" . $post->getDescription() . "</p>
                    <p>" . $post->getContact() . "</p>
                    <p>" . $post->getSalary() . "</p>
                </div>
            ";
        }
        return $output;
    });

    return $app;
?>
