## Laravel Demo | 2023-10-08
Introduction to Routes, Model, View, and Controller in [Laravel](https://laravel.com/).

| Resource           | Location                                                                                 |
|--------------------|------------------------------------------------------------------------------------------|
| Routes             | [routes/web.php](routes/web.php)                                                         |
| Student Model      | [app/Models/Student.php](app/Models/Student.php)                                         |
| Student Views      | [resources/views/student](resources/views/student)                                       |
| Student Controller | [app/Http/Controllers/StudentController.php](app/Http/Controllers/StudentController.php) |


### Installation
1. Clone or download this repository.

2. Create a MySQL database named **aaaaaaaa** and import the [**aaaaaaaa.sql**](aaaaaaaa.sql) file into it.

3. Copy [**.env.example**](.env.example) to the same directory and rename the new copy as **.env**.

4. Open this project's directory in the terminal and execute the following commands:

    a. Install dependencies:
    ```
    composer install
    ```

    b. Generate Application Key:
    ```
    php artisan key:generate
    ```

    c. Run the development server
    ```
    php artisan serve
    ```
    Then open the development server URL.
