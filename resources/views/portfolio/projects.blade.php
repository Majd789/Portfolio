@extends('layouts.Master')

@section('title')
    portfolio-projects
@endsection

@section('content')

    <div class="projects  mt-2">
        <div class="projects-title text-center">
            <h2 class="">My Projects</h2>
            <p> I have a variety of projects in different technical fields such as web applications, networks and artificial intelligence.</p>
        </div>
        <div class="list-projects">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h4># Note Application</h4>
                    <h5>Technologies : Laravel, Html , CSS ,Bootstrap , Mysql </h5>
                    <p>The Note Application is a web-based tool designed to offer a simple and user-friendly
                        environment for personal note-taking. It allows users to create, edit,
                        and organize text notes into folders, ensuring secure storage.
                        The application focuses on providing an interactive and fast user interface,
                        with additional features like tagging notes for easy categorization and a quick search
                        function to effortlessly find the desired content.</p>
                </li>
                <li class="list-group-item">
                    <h4># Courses Application</h4>
                    <h5>Technologies : Laravel , Html , CSS , Mysql </h5>
                    <p >The Courses Application is a web-based platform designed to simplify the management
                        and delivery of online courses. It allows users to create, organize, and manage educational content,
                        including lessons, quizzes, and assignments. The application offers a user-friendly interface
                        that supports both instructors and students, enabling efficient course enrollment, progress tracking,
                        and communication. Additional features include grading tools,
                        discussion forums, and the ability to integrate multimedia resources for a rich learning experience.</p>
                </li>
                <li class="list-group-item">
                    <h4># Chat Application</h4>
                    <h5>Technologies : Java , javaFX , CSS , java_Socket </h5>
                    <p >The Chat Application is a Java-based platform designed for real-time communication between two users.
                        Built using JavaFX for the user interface and Java WebSocket for seamless data exchange,
                        the application provides a simple and responsive environment for instant messaging.
                        It allows users to send and receive text messages in real-time,
                        with features such as message timestamps and typing indicators.
                        The application is designed with a focus on reliability and efficiency,
                        ensuring smooth and continuous communication.</p>
                </li>
                <li class="list-group-item">
                    <h4># Pedestrian Counting</h4>
                    <h5>Technologies : Python , computer vision techniques, OpenCV , TensorFlow</h5>
                    <p >The Pedestrian Counting program is an application developed using Python
                        and computer vision techniques, designed to detect and count people passing through
                        a specific area. The program leverages libraries such as OpenCV and TensorFlow or YOLO to detect
                        and track individuals in video footage or live camera feeds. It processes video frames,
                        analyzing them to identify human shapes, and then counts the number of pedestrians,
                        displaying the results in real-time. This application can be used for various purposes,
                        such as improving traffic management,
                        monitoring public spaces, and collecting data for statistical analysis.</p>
                </li>
                <li class="list-group-item">
                    <h4># Plant Disease Prediction</h4>
                    <h5>Technologies : Python ,OpenCV , PCA , KNN</h5>
                    <p >
                        The Plant Disease Prediction application is a tool developed using Python and machine learning techniques,
                        designed to predict and diagnose plant diseases. By analyzing images of plant leaves or other parts,
                        the application can detect signs of various diseases and provide an accurate diagnosis.
                        It utilizes convolutional neural networks (CNNs) and other advanced algorithms to process and classify
                        the images, offering farmers and gardeners a quick and reliable way to identify potential issues and take
                        preventive measures.
                        This application aims to enhance crop management and reduce losses caused by plant diseases.</p>
                </li>
            </ul>

        </div>
    </div>
@endsection
