<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Laravel</title>

    <!-- ========== All CSS files linkup ========= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <!-- *SECTION - Шапка -->
        <header class="pb-3 mb-4 ">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal p-3">API Laravel</h1>
            </div>
        </header>

        <div class="row g-5">
            <!-- *TODO - Навигация -->
            <div class="col-md-5 col-lg-4 ">
                <div class="dropdown   sticky-top">
                    <div class="flex-shrink-0 p-3 " style="width: 280px;">
                        <a href="/"
                            class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                            <svg class="bi pe-none me-2" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="fs-5 fw-semibold">Меню</span>
                        </a>
                        <ul class="list-unstyled ps-0">
                            <li class="mb-1 dropdown-toggle" id="navDrop" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                    aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src="./resources/img/grid.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Начало работы</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="dashboard-collapse" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#project_creation"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                                Создание проекта REST API</a>
                                        </li>
                                        <li><a href="#distribution_of_data"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                                Раздача данных для REST API</a>
                                        </li>
                                        <li><a href="#accelerate_postman_course"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                                Ускоренный курс Postman REST Client</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 dropdown-toggle" id="navDrop_2" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src="./resources/img/grid.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Работы с данными</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="orders-collapse" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#data_storage_and_verification"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Хранение
                                                данных и проверка</a>
                                        </li>
                                        <li><a href="#updating_deleting_data"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Обновление
                                                и удаление данных</a>
                                        </li>
                                        <li><a href="#JSON_API_resources"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Ресурсы
                                                API-управление ответом JSON</a>
                                        </li>
                                        <li><a href="#page_numbering"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Нумерация
                                                страниц
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 dropdown-toggle" id="navDrop_3" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse_2" aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src=" {{asset('/grid.png')}}" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Загрузки отношений</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="orders-collapse_2" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#optional_relationship_loading"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Необязательная
                                                загрузка отношений
                                            </a>
                                        </li>
                                        <li><a href="#a_universal_feature"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Универсальный
                                                признак загрузки отношений</a>
                                        </li>
                                        <li><a href="#uploading_with_visitors"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Загрузка
                                                отношений с посетителями
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 dropdown-toggle" id="navDrop_4" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse_3" aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src="./resources/img/grid.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Настройка аутентификации</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="orders-collapse_3" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#setting_up_sanctum_authentication"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Настройка
                                                аутентификации с помощью Sanctum</a>
                                        </li>
                                        <li><a href="#route_protection"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Защита
                                                маршрутов</a>
                                        </li>
                                        <li><a href="#automatic_token_addition"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Автоматическое
                                                добавление токена в запросы Postman
                                            </a>
                                        </li>
                                        <li><a href="#token_withdrawal_and_exit"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Отзыв
                                                токена и выход из системы
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 dropdown-toggle" id="navDrop_5" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse_4" aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src="./resources/img/grid.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Авторизация</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="orders-collapse_4" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#gates"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Авторизация
                                                Gates</a>
                                        </li>
                                        <li><a href="#policies"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Авторизация
                                                с помощью Policies (стратегий)
                                            </a>
                                        </li>
                                        <li><a href="#manual_authorization_policies"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Ручная
                                                авторизация Policies (стратегий)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 dropdown-toggle" id="navDrop_6" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <button
                                    class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#orders-collapse_5" aria-expanded="false">
                                    <div class="col d-flex align-items-start">
                                        <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                            height="1.75em">
                                            <img src="./resources/img/grid.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0">Напоминание о событиях</h6>
                                        </div>
                                    </div>
                                </button>
                                <div class="collapse" id="orders-collapse_5" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#event_reminder"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Напоминание
                                                о событиях</a>
                                        </li>
                                        <li><a href="#task_planning"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Планирование
                                                задач
                                            </a>
                                        </li>
                                        <li><a href="#notification_and_sending_by_email"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Уведомление
                                                и отправка по электронной почте
                                            </a>
                                        </li>
                                        <li><a href="#quesues"
                                                class="link-body-emphasis d-inline-flex text-decoration-none rounded">Очереди
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 dropdown-toggle" id="navDrop_6" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <button
                                class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#orders-collapse_5" aria-expanded="false">
                                <div class="col d-flex align-items-start">
                                    <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em"
                                        height="1.75em">
                                        <img src="./resources/img/grid.png" alt="">
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-0">Регулирование API</h6>
                                    </div>
                                </div>
                            </button>
                            <div class="collapse" id="orders-collapse_5" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#api_regulation"
                                            class="link-body-emphasis d-inline-flex text-decoration-none rounded">Регулирование API</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- *TODO - Модуль с блоками -->
            <div class="col-md-7 col-lg-8 order-md-last">
                <!-- *!SECTION - Создание проекта REST API div -->
                <div class="">
                    <div class="rounded-3" id="project_creation">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Начало работы</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Создание проекта REST API</h4>
                                    <p class="pb-3">Мы создадим API для управления событиями. кратко объясним, что такое
                                        API. Итак, API
                                        расшифровывается как интерфейс прикладного программирования. По сути, это набор
                                        правил или протоколов, которые позволяют различным программным приложениям
                                        взаимодействовать
                                        друг с другом. Теперь, в понятной для человека форме, это означает, что в случае
                                        управления событиями у вас может быть интерфейсное приложение, созданное на таком
                                        фреймворке, как Vue или React, или дополнительно, в то же время у вас может быть
                                        мобильное приложение, скажем, для iOS или Android, на самом деле не имеет значения.
                                        Но этим приложениям нужно где-то хранить данные, и им нужно получать данные из
                                        единого места, и этим местом будет API. Теперь наш API будет использовать rest.
                                    </p>
                                    <p>Rest означает передачу репрезентативного состояния. По сути, это архитектурный стиль
                                        для проектирования сетевых приложений.
                                    </p>
                                    <p>По сути, это означает использование протокола Http. Его методы, такие как get post,
                                        put, path и delete, позволяют манипулировать ресурсами, а затем обычно отправлять
                                        данные, используя формат Json, а также получать данные, также обычно используя
                                        формат Json. </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Создание проекта с помощью composer.</h4>
                                <p class="card-text">Итак, введите composer, создайте проект с флагом –preferred-dist.
                                    composer create-project --prefer-dist laravel/laravel event-management</p>

                                <!-- *TODO - Фото-карточка кода -->
                                <div class="pb-3">
                                    <img src="/images/block-1.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Теперь нам просто нужно зайти во вновь созданное приложение (cd
                                    event-management)</p>
                                <div class="pb-3">
                                    <img src="/images/block-2.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Итак, мы собираемся создать контроллеры, модели и связи, миграции для
                                    моделей, и мы настроим рутину.</p>
                                <p class="card-text">Давайте продолжим и откроем редактор Visual Studio Code
                                    <br>И первым шагом будет настройка базы данных. Внутри файла .env добавим
                                    базу данных с названием event-management.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-3.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл .env</strong></p>
                                    </div>
                                </div>
                                <div class="col d-flex align-items-start  bg-light rounded-3 py-4 pb-">
                                    <div class="image bi text-muted flex-shrink-0 me-3 p-3 " width="1.75em" height="1.75em">
                                        <img src="/images/fluent-mdl2_important.png" alt="">
                                    </div>

                                    <!-- **TODO - important блок с важной информацией, как пометка что-то очень важное. -->
                                    <div class="">
                                        <h4 class="fw-bold mb-0">Важно!</h4>
                                        <p>Убедитесь, что вы используете правильный пароль для своей базы данных, правильный
                                            хост. </p>
                                    </div>
                                </div>
                                <p class="card-text ">Далее давайте запустим php artisan migrate, чтобы создать базу данных
                                    и
                                    запустить миграции</p>
                                <div class="pb-3">
                                    <img src="/images/block-4.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь вернемся к редактору кода.
                                    <br>Далее нам нужно создать модели. У нас будет всего две модели, которые мы создаем,
                                    плюс модель по умолчанию, которая всегда включена в Laravel, пользовательская модель.
                                    <br>Давайте создадим эти модели, используя php artisan make:model -m
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-5.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">назовем ее Event</p>
                                <div class="pb-3">
                                    <img src="/images/block-6.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Создаем вторую модель с названием Attendee</p>
                                <div class="pb-3">
                                    <img src="/images/block-7.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">генерируем контроллеры</p>
                                <div class="pb-3">
                                    <img src="/images/block-8.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Мы будем использовать пространство имен API для этих контроллеров.
                                    Флаг API будет пропускать действия, отвечающие за отображение форм, редактирование и
                                    создание форм, потому что у нас нет никаких форм в API. Поскольку мы просто возвращаем
                                    данные,
                                    вы увидите, как они выглядят через секунду.
                                    <br>Теперь мы создадим контроллер событий также с этим флагом API.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-9.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Контроллеры находятся в контроллерах приложений.</p>
                                <div class="pb-3">
                                    <img src="/images/block-10.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Http/Controllers/Api/</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь добавим взаимосвязи и реализуем миграции.
                                    Открываем файл с миграциями и открываем созданные миграции.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-11.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>database/migrations</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Начнем с событий. У нас есть идентификатор и временные метки.
                                    Теперь добавим еще несколько столбцов.
                                    <br>Итак, первым делом было бы создать отношение "один ко многим" между пользователем
                                    и событиями, что означает, что один пользователь может быть владельцем или
                                    администратором многих событий, это означает, что столбец, определяющий связь,
                                    попадает в таблицу событий.
                                    <br>Мы можем использовать сокращенный метод для foreign ID, для этого необходимо указать
                                    один аргумент, который является моделью, к которой это относится.
                                    Это создает столбец, который будет содержать связь, и дополнительно добавит
                                    внешний ключ для этого столбца.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-12.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл миграции events</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Далее нам понадобится столбец string, указывающий название события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-13.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл миграции events</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Давайте добавим текст для более длинной текстовой формы с именем
                                    description,
                                    которая может быть обнулена.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-14.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл миграции events</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Также создадим колонки с датой начала и временем окончания события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-15.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл миграции events</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь давайте перейдем к участникам. Здесь у нас только две
                                    взаимосвязи.
                                    Мы также будем использовать внешний идентификатор и одно отношение - к пользователю.
                                    Чтобы посетить мероприятие, вам нужно зарегистрироваться, у вас должна быть учетная
                                    запись,
                                    и это будет
                                    отношение к пользователю, а также отношение "один ко многим", что означает,
                                    что пользователь может посещать многие события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-16.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл миграции attendees</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь давайте продолжим и добавим эти отношения внутри моделей.
                                    Для этого открываем модель события (файл Event.php) Добавим первое отношение,
                                    публичную функцию для пользователя. Event является владельцем всех участников,
                                    добавим возвращаемые типы.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-17.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Event.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Добавим принадлежность</p>
                                <div class="pb-3">
                                    <img src="/images/block-18.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Event.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Создаем вторую функцию и добавляем отношения,
                                    чтобы они имели отношение к пользователю.</p>
                                <div class="pb-3">
                                    <img src="/images/block-19.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Event.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь переходим в файл Attendee.php и создаем функцию user</p>
                                <div class="pb-3">
                                    <img src="/images/block-20.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Attendee.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Также важно не забывать об импортировании классов,
                                    для корректной работы кода.
                                    посещать множество событий, а другое отношение - это само событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-21.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Attendee.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Также важно не забывать об импортировании классов,
                                    для корректной работы кода.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-22.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Attendee.php</strong></p>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-23.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>app/Models/Event.php/</strong></p>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0 pb-3">Маршрутизация</h4>
                                    <p>Итак, определив взаимосвязи моделей, добавим маршрутизацию. Мы будем определять
                                        маршруты внутри API.php
                                        Почему мы определяем маршруты в файле API.php.
                                        Посмотрим классы provider Now provider, они настраивают приложение Laravel, сообщаю,
                                        как себя вести и что делать, конкретный поставщик отвечает за инициализацию и
                                        настройку маршрутизации.
                                    </p>
                                    <p>В нем определен некоторый ограничитель скорости для группового API, и он также
                                        определяет, что вам необходимо загружать маршруты из API, PHP-файла и
                                        веб-PHP-файлов. И, в частности, если вы загружаете маршруты из API dot php, вам
                                        нужно зафиксировать все эти маршруты с помощью текстового API. Таким образом, все
                                        наши маршруты имеют префикс API.
                                    </p>
                                    <p>PHP-файл ядра определяет некоторые общие классы промежуточного программного
                                        обеспечения,
                                        которые применяются ко всем запросам. В основном обрабатывают вызовы некоторых
                                        дополнительных функций, которые,
                                        вероятно, нужны каждому приложению, но есть группы промежуточного программного
                                        обеспечения, они разделены, и их можно настраивать.
                                    </p>
                                    <p>Можно настроить разные группы промежуточного программного обеспечения, но они
                                        разделены, потому что разные приложения предъявляют разные требования.
                                    </p>
                                    <p>Веб-приложения, те, которые вы используете для рендеринга HTML, обычно имеют токены
                                        csrf,
                                        у них есть сеансы и у них есть формы. Но, с другой стороны, API-интерфейсы большую
                                        часть времени не имеют состояния, что означает,
                                        что у них нет пользователя сессии.
                                    </p>
                                    <p>Как правило, API и web - это разные приложения с разными требованиями, поэтому у
                                        определены эти разные группы промежуточного программного обеспечения,
                                        и эти веб-промежуточные программы не применяются к API.
                                    </p>
                                    <p>Можно использовать значения по умолчанию, но вы вольны создавать свои собственные
                                        группы промежуточного программного обеспечения,
                                        а также вы вольны приходить придумайте свои собственные имена файлов маршрутов и
                                        свои собственные группы промежуточного программного обеспечения, и вы знаете, что
                                        можете смешивать и применять их свободно,
                                        независимо от потребностей вашего приложения.
                                    </p>

                                    <p>А пока давайте продолжим и определим маршруты.</p>
                                    <div class="pb-3">
                                        <img src="/images/block-24.png" class="img-fluid" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-muted"><strong>routes/api.php</strong></p>
                                        </div>
                                    </div>

                                    <p>Использовать метод ресурса API route, он не будет регистрировать маршруты,
                                        специфичные для отображения форм. Таким образом,
                                        регистрируются только те маршруты, которые отвечают за перечисление, показывая один
                                        ресурс и непосредственно добавляя или изменяя
                                        его без маршрутов для форм.</p>

                                    <p>Сначала создадим путь, предназначенный для событий, используя контроллер событий,
                                        который мы только что создали.</p>
                                    <div class="pb-3">
                                        <img src="/images/block-25.png" class="img-fluid" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-muted"><strong>routes/api.php</strong></p>
                                        </div>
                                    </div>

                                    <p>Убедитесь, что данный класс импортирован.</p>
                                    <div class="pb-3">
                                        <img src="/images/block-26.png" class="img-fluid" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-muted"><strong>routes/api.php</strong></p>
                                        </div>
                                    </div>

                                    <p>Прописываем второй путь, используя UserController::class, не забывая об
                                        импортировании классов. Добавляем ресурс API
                                        с названием events.attendants. Теперь участники не существуют сами по себе, они
                                        всегда должны быть частью события,
                                        поэтому указываем на attendeeController, он был импортирован автоматически и это
                                        будет контроллер с ограниченной областью действия,
                                        участник будет указывать на событие.
                                    </p>
                                    <p>Область действия означает, что это ресурсы всегда являются частью события, т.е если
                                        вы используете привязку модели маршрута для получения участника,
                                        Laravel будет автоматически загружать его,
                                        просматривая только участников родительского события.
                                    </p>
                                    <p>Теперь маршруты для этого контроллера будут иметь оба параметра, событие и участник,
                                        и они будут оба обязательными. </p>
                                    <div class="pb-3">
                                        <img src="/images/block-27.png" class="img-fluid" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-muted"><strong>routes/api.php</strong></p>
                                        </div>
                                    </div>

                                    <p>Перейдем к терминалу и запустим список маршрутов PHP, чтобы мы могли увидеть, как
                                        выглядят эти маршруты.</p>
                                    <div class="pb-3">
                                        <img src="/images/block-28.png" class="img-fluid" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-muted"><strong>консоль</strong></p>
                                        </div>
                                    </div>

                                    <p>У нас есть событие API events, это первый параметр, и только затем идут участники и
                                        конкретный участник. Чтобы получить этого участника, Laravel получит родительское
                                        событие и выполнит запрос таким образом,
                                        что если участник не является частью этого события, это вызовет ошибку.</p>
                                    <p>На данный момент мы настроили приложение, у нас есть маршруты и модель данных.
                                    </p>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Раздача данных для REST API div -->
                <div class="">
                    <div class="rounded-3" id="distribution_of_data">
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Раздача данных для REST API. Postman</h4>
                                    <p class="pb-3">Теперь нам необходимо правильно внедрить новый инструмент под названием
                                        Postman. Мы будем использовать его для взаимодействия с API.
                                        Давайте получим некоторые данные, сгенерированные с помощью заполнения.
                                    </p>
                                    <p>Фабрики, ответственные за настройку конкретных моделей, переходят в папку database
                                        factories,
                                        а затем seeder классы, которые выполняют действие по загрузке определенных данных в
                                        базу данных, находятся внутри папки seeders.
                                    </p>
                                    <p>У нас есть фабрика пользователей для автоматически сгенерированной
                                        пользовательской модели по умолчанию Автоматически сгенерированная пользовательская
                                        модель,
                                        нам нужно сгенерировать фабрику для события, а затем мы также генерируем класс
                                        инициатора события, затем класс инициатора участника, и соберем все это вместе в
                                        этой базе данных,
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Генерация событий</h4>
                                <p class="card-text">Начнем с генерации события завод.</p>

                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Перейдем к терминалу и внутри каталога проекта запустим PHP, artisan
                                    make factory, указав, что это для модели с именем event. </p>
                                <div class="pb-3">
                                    <img src="/images/block-29.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>консоль</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Снова используем artisan для изготовления заполнителя, который будет
                                    называться event Sedeerr.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-30.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>консоль</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">И сделаем еще один, для участника.</p>
                                <div class="pb-3">
                                    <img src="/images/block-31.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>консоль</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь реализуем фабрику событий. Переходим в файл EventFactory.php.
                                    Изначально файл пустой. И в качестве напоминания для фабрик, задача - реализовать этот
                                    метод определения, вернуть из него массив, где ключами массива являются имена столбцов
                                    или другие вызываемые атрибуты модели, а значения - это некоторые значения.
                                </p>
                                <p class="card-text">Независимо от того, сгенерированы они или рандомизированы, им просто
                                    нужно предоставить значения для каждой отдельной записи. И для удобства мы используем
                                    библиотеку под названием Faker для генерации некоторых поддельных данных. Нам необходимо
                                    уникальное имя, описание в виде текста, время начала и время конца.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-32.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventFactory.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь переходим в файл EventSeeder.php, изначально он пустой. Мы
                                    знаем, что каждое событие должно принадлежать пользователю, поэтомиу помимо генерации
                                    нового события с помощью фабрики событий, нам необходимо каждое событие привязать к
                                    конкретному пользователю, владельцу и организатору этого события.
                                </p>
                                <p class="card-text">Первым шагом может быть получение всех пользователей из базы данных,
                                    используя метод user model all.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-33.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventFactory.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь воспользуемся простым циклом for, инициализируем его нулем (если
                                    индекс меньше 200, просто увеличиваем на единицу). В теле цикла получим случайного
                                    пользователя, чтобы мы могли сделать пользователей случайными, чтобы все эти
                                    пользователи возвращали коллекцию, которая является объектом в Laravel, и теперь мы
                                    можем использовать app models event, также используем полное пространство имен, вызвать
                                    метод factory, а затем просто вызвать create,, который создаст новую модель и сохранит
                                    ее в базе данных. Внутри метода create() нам нужно передать идентификатор пользователя,
                                    идентификатор пользователя, будет выбран случайно. </p>
                                <div class="pb-3">
                                    <img src="/images/block-34.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventFactory.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь перейдем к файлу AttendeeSedeer для участников.
                                    Нам понадобятся пользователи, поскольку нам нужны люди, которые будут посещать
                                    мероприятия( для этого будем использовать полное пространство имен).
                                </p>
                                <p class="card-text">Затем укажем, что каждый пользователь посещает некоторое случайное
                                    количество мероприятий и будет посещать некоторый случайный набор событий. Для этого нам
                                    сначала нужно получить все события.
                                </p>
                                <p class="card-text">Добавим переменную events и создадим модели приложений. Это будут
                                    события для посещения, и из коллекции событий мы выберем случайное число событий,
                                    используя функцию Rand() для генерации случайного числа от 1 до 3.
                                </p>
                                <p class="card-text">Также могут быть пользователи, которые не посещают какие-либо
                                    мероприятия, которые могут быть полезны для тестирования некоторых случаев. В любом
                                    случае, на данном этапе мы будем использовать это для каждого цикла, чтобы перебирать
                                    все события, которые нужно посетить как событие.
                                </p>
                                <p class="card-text">Теперь добавим цикл foreach для событий, используя модель и метод
                                    create(). По сути, для attend нет фабрики, поскольку все, что хранится у attendee,
                                    связано с пользователем, который присутствовал бы на мероприятии и на самом событии.
                                    Таким образом, мы можем передать простой массив, в котором был бы идентификатор
                                    пользователя.
                                </p>
                                <p class="card-text">Внутри метода create() нам нужно передать идентификатор пользователя и
                                    идентификатор события
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-35.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>AttendeeSedeer.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И, наконец, давайте соберем все это воедино. Заходим в файл
                                    DatabaseSeeder.php, и здесь у нас уже есть случайно сгенерированные пользователи.
                                    Давайте увеличим это число до 1000, а затем, чтобы вызвать другие заполнители, нам нужно
                                    сделать это в определенном порядке.
                                </p>
                                <p class="card-text">Первым делом нам нужно сгенерировать все события. Это делается с
                                    помощью функции call() и передачи имени класса seeder(событие, класс seeder) И вызвать
                                    старший класс участника. Не нужно импортировать эти классы-заполнители, потому что они
                                    находятся в том же пространстве имен, что и заполнитель базы данных.
                                </p>
                                <p class="card-text">Итак, мы загружаем несколько пользователей, генерируем несколько
                                    событий со случайным владельцем, а затем генерируем несколько участников для этих
                                    событий.

                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-36.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>DatabaseSeeder.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Итак, на данном этапе давайте попробуем запустить все это, чтобы
                                    запустить все миграции, сбросить базу данных с помощью команды migrate refresh.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-37.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Затем заполним базу данных, это можно сделать с помощью PHP, artisan
                                    migrate refresh с флагом seed. </p>
                                <div class="pb-3">
                                    <img src="/images/block-38.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Готово. Мы создали заполнители и заполнили базу данных.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Ускоренный курс Postman REST Client div -->
                 <div class="">
                    <div class="rounded-3" id="accelerate_postman_course">

                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Ускоренный курс Postman REST Client</h4>
                                    <p class="pb-3">Теперь при создании приложения, как и при создании веб-сайтов, вы
                                        хотели бы видеть, как все выглядит при создании проекта.
                                    </p>
                                    <p>Говоря о веб-сайтах, открывая страницу, вы видите страницы, перейдете по ссылкам,
                                        и то же самое с API, который вы используете. Хотелось бы посмотреть, возвращает
                                        ли он данные, которые вы ожидаете, или вы можете добавить или отправить
                                        некоторые данные. Таким образом, вы также можете создавать Client как
                                        интерфейсное приложение, скажем, в Vue или React или мобильное приложение, но
                                        это не всегда так. Вы или ваша компания можете отвечать только за обработку
                                        данных, то есть за API. Проще говоря, вам нужен клиент для вашего API, чтобы вы
                                        могли попробовать его или протестировать вручную, посмотреть, работает ли он.
                                        Сейчас самый популярный инструмент, который является клиентом API, называется
                                        Postman.

                                    </p>
                                    <p>Сейчас существует множество инструментов. Возможно, у вас есть свои предпочтения,
                                        но Postman существует уже много лет, и я думаю, что
                                        это самый известный и популярный инструмент. Поэтому я бы посоветовал вам
                                        перейти на эту <a
                                            href="https://www.postman.com/downloads/?utm_source=postman-home">страницу</a>
                                        и загрузить версию postman для вашей системы, поскольку это инструмент, который
                                        мы будем использовать в этом курсе, чтобы опробовать наш API.

                                    </p>



                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Postman API</h4>
                                <p>Теперь Postman доступен во всех системах, так что это Mac Linux и Windows.</p>
                                <p>После загрузки запустите его.</p>
                                <p>Postman - это огромный инструмент, поэтому у него так много опций. Мы проведем краткий
                                    ускоренный курс, чтобы вы могли как можно быстрее приступить к тестированию своих
                                    наиболее важных опций.
                                </p>
                                <p>Итак, как только вы откроете postman, первое, что вам следует сделать при работе с новым
                                    проектом, - это создать новое рабочее пространство.
                                </p>
                                <p>Таким образом, вы отделите переменные запросов и настроек данных от всех других
                                    приложений. Для каждого приложения, с которым вы работаете, необходимо создавать
                                    отдельную рабочую область.
                                </p>
                                <p>Интерфейс postman меняется, поэтому при загрузке он может выглядеть по-другому.
                                    Необходимо найти меню "Рабочие пространства" и нажать "Создать рабочее пространство".
                                    Придумайте индивидуальное название для своего рабочего пространства.
                                </p>
                                <!-- *TODO - Фото-карточка кода -->
                                <div class="pb-3">
                                    <img src="/images/block-39.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">В данном уроке рабочее пространство будет названо events management.
                                    Отметим, что это будет личное рабочее пространство, которое на самом деле не имеет
                                    значения, потому что мы не будем использовать никаких дополнительных опций postman, а
                                    затем просто нажмите создать рабочее пространство.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-40.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Теперь мы находимся в нашем собственном новом рабочем пространстве.
                                    Начнем с левой стороны, с коллекций. В настоящее время у нас их нет, но collections
                                    позволяет группировать различные запросы в несколько значимых группы.

                                </p>

                                <p class="card-text">Допустим, у вас может быть коллекция для обработки событий, тогда у вас
                                    может быть отдельная коллекция для получения участников или изменения участников. Тогда
                                    у вас также может быть третья коллекция
                                    для управления пользователями. Вы придумываете имена коллекций, но они просто позволяют
                                    вам упорядочивать запросы.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-41.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Так же есть среды, так что рабочее пространство может быть привязано к
                                    проекту. Предположим, что у нас есть API управления событиями, так что это наше рабочее
                                    пространство. Но это, очевидно, будет выполняться в разных средах, начиная с нашей
                                    локальной среды.
                                    По мере разработки у вас может появиться тестовая среда, в которой вы тестируете свое
                                    приложение, а затем производственная среда.

                                </p>

                                <p class="card-text">Таким образом, вы бы создали эти среды, чтобы сохранить некоторые
                                    отдельные данные для этих сред. Это могут быть, например, переменные, такие как базовый
                                    URL-адрес или где вы можете найти этот конкретный проект. Используя это, вам не нужно
                                    повторно вводить этот URL-адрес.
                                </p>

                                <p class="card-text">Каждый раз, когда вы делаете запрос, вы будете видеть это позже, и
                                    тогда у вас будет история, которая на самом деле довольно полезна.

                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-42.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Вы можете просмотреть историю всех запросов, которые вы сделали с
                                    помощью Postman, включая все параметры запроса, заголовки, аутентификацию, учетные
                                    данные, текст, который был отправлен и так далее.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-43.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь попробуем сделать наш первый запрос, нажав на кнопку с плюсом.
                                    Это откроет самое важное окно в Postman, которое является окном для отправки запроса. На
                                    данном этапе сделаем первый запрос к нашему приложению.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-44.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Во-первых, убедимся, что он запускает команду $PHP artisan serve внутри
                                    каталога проекта и получаем URL.

                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-45.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Копируем этот адрес и добавляем его в postman.
                                </p>


                                <div class="pb-3">
                                    <img src="/images/block-46.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">И нажимаем кнопку отправить
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-47.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Мы получили ответ. Неудивительно, что в некоторых HTML-файлах вы можете
                                    увидеть строку ответа, которая будет просто текстом, или вы можете открыть
                                    предварительный просмотр. Это страница приветствия платформы Laravel.</p>
                                <p class="card-text">Также можно увидеть некоторую дополнительную информацию, например,
                                    какие файлы cookie были возвращены, Какие заголовки были возвращены с ответом, также вы
                                    видите код состояния. Код состояния Http 200.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-48.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-49.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-50.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Очевидно, что Postman - это не инструмент, разработанный для просмотра
                                    веб-сайтов, но если вы попытаетесь посмотреть на это с другой стороны, то Postman - это
                                    просто клиент, который взаимодействует с сервером. То же самое, что делает браузер. Он
                                    запрашивает у сервера ресурс по этому адресу и просто получает ответ, который, как
                                    оказалось,
                                    содержит HTML-код.

                                </p>

                                <p class="card-text">Теперь это информация, полезна для браузеров, потому что они могут
                                    отображать ее визуально. Но нам это не важно. Вместо этого мы хотели бы увидеть
                                    некоторые данные.
                                </p>

                                <p class="card-text">Прежде чем мы попытаемся получить некоторые данные из нашего API,
                                    кратко ознакомимся с этими шагами.
                                </p>

                                <p class="card-text">Итак, у нас есть параметры, так что вы можете указать некоторые
                                    параметры, такие как параметр запроса с некоторым значением, вы можете выбирать и
                                    отменять их выбор. Затем у вас есть вкладка авторизации, где вы можете предоставить
                                    некоторые учетные данные для защищенных паролем или токеном защищенных API.

                                </p>

                                <p class="card-text">Вы можете отправить несколько пользовательских заголовков, вы можете
                                    отправить тело запроса, скажем, в формате Json, и еще несколько вариантов. Также можно
                                    писать тесты на JavaScript внутри Postman, и многие люди это делают.
                                </p>


                                <p class="card-text">в Postman есть инструменты, которые позволяют вам настраивать, какие
                                    запросы вы отправляете. Вы также можете открыть множество вкладок и выбрать здесь
                                    Http-глагол для отправки различных типов запросов. Таким образом, URL-адресом для
                                    событий, например, будет /API/events.Это запрос get. Давайте отправим его.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-51.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Но мы не получаем никаких данных, потому что мы не возвращаем никаких
                                    данных от контроллера.</p>
                                <p class="card-text">Давайте перейдем к контроллеру событий(файл EventController.php). И
                                    самым простым способом было бы просто вернуть все события. Для этого перейдем к моделям
                                    приложений, event model и вызовем метод all.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-52.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И если вы сейчас запустите этот запрос, вы получите Json, это массив
                                    объектов со всеми данными о событиях, это будут необработанные данные.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-53.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>10;41</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Если мы выведем пользователей, в нем отобразятся не все свойства. Мы,
                                    например, не увидим пароль, потому что пользовательская модель по умолчанию имеет это
                                    скрытое защищенное свойство, которое исключает некоторые свойства из сериализации по
                                    умолчанию механизм Laravel, который в основном означает преобразование данных в массив
                                    или в Json, и эти два будут исключены.
                                </p>


                                <p class="card-text">Итак, давайте теперь вернемся к событиям.</p>
                                <p class="card-text">Можно вернуть одно событие. Самым простым способом является
                                    использование привязки модели маршрута.</p>
                                <div class="pb-3">
                                    <img src="/images/block-54.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь давайте попробуем навестить одного события.</p>
                                <div class="pb-3">
                                    <img src="/images/block-55.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-56.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Итак, теперь предположим, что в данной вкладке вы хотели бы получить
                                    одно событие, и на другой вкладке список событий. Так что, я думаю, вы часто будете
                                    делать это при разработке API, и теперь видите, что мы фактически повторяем сами.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-57.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Поэтому каждый раз нам нужно вводить домен и этот префикс API.
                                    Так что это уже некоторая работа, которую нам пришлось проделать с двумя запросами, не
                                    говоря уже о том, будет ли у нас 5 или 10. И затем, если у нас разные среды, у нас будут
                                    те
                                    же суффиксы, что и у событий API, но другой домен, скажем, для тестовой среды или
                                    производственной среды. Вот почему вам следует создать среду для своего рабочего
                                    пространства.

                                </p>
                                <p class="card-text">Итак, перейдите на вкладку среды и нажмите создать среду, и дайте ей
                                    имя.
                                    Для наших целей мы создадим локальную среду, а затем вы сможете добавить переменную.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-58.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Вы можете либо перейти в среду и добавить переменную здесь, либо с
                                    помощью адресной строки. Вы также можете выделить какой-либо текст и нажать установить
                                    как переменную или создать новую переменную. В этом контексте мы просто создадим базовый
                                    URL-адрес с подчеркиванием.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-59.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-60.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-61.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Сделаем его глобальным, и он будет содержать следующее значение.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-62.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь давайте установим переменную, и если мы снова нажмем кнопку
                                    отправки, все сработает. Теперь вы можете выбрать текущую среду, используя этот
                                    выпадающий список.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-63.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Выберем локальную.</p>
                                <div class="pb-3">
                                    <img src="/images/block-64.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Вы можете изменить ее на тестовую или производственную, и тогда у вас
                                    всегда будет правильный префикс.
                                </p>
                                <p class="card-text">Теперь можно использовать эту переменную и здесь.</p>
                                <div class="pb-3">
                                    <img src="/images/block-65.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Таким образом, переменные полезны не только для URL, но это наиболее
                                    очевидный вариант использования переменных. Теперь каждый раз, когда нам нужно сделать
                                    запрос или новый запрос внутри этого конкретного API, мы не должны вводить URL. Мы можем
                                    использовать переменную, чтобы легко переключаться между средами.
                                </p>
                                <p class="card-text">Теперь создадим новую коллекцию и назовем ее events.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-66.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-67.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">И так, у нас есть эта коллекция событий.</p>
                                <p class="card-text">Теперь мы хотели бы сохранить эти запросы, чтобы нам не приходилось
                                    создавать их с нуля, потому что нам пришлось вводить URL. Иногда у вас могут быть
                                    запросы, в которых вы создаете тела, поэтому повторный ввод может занять много рабочего
                                    времени.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-68.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Итак, давайте нажмем сохранить как, и именем запроса может быть одно
                                    событие, и выберем события, потому что мы хотим сохранить это внутри этой коллекции
                                    событий, а затем нажимаем сохранить.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-69.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-70.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-71.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">У нас сохранен запрос.
                                </p>
                                <p class="card-text">Делаем тоже самое с другим запросом, внутри той же коллекции, но с
                                    названием All events.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-72.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь можно закрыть эти запросы и легко вернуться куда нам
                                    необходимо.У нас будет правильный UR, все параметры, которые были сохранены.Поэтому
                                    теперь нам легко получить одно событие. Это намного упрощает тестирование API.
                                </p>
                                <p class="card-text">Также на вкладке "История" вы видите все запросы, которые вы сделали в
                                    этой рабочей области.
                                </p>
                                <p class="card-text">Мы рассмотрели наиболее важные основы использования Postman, и этого
                                    достаточно, чтобы начать использовать его, пока мы создаем API.

                                </p>
                            </div>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION - Хранение данных и проверка div -->
                <div class="">
                    <div class="rounded-3" id="data_storage_and_verification">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Работа с данными</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Хранение данных и проверка</h4>
                                    <p class="pb-3">Продолжим изучать, как создавать rest API в Laravel. На данный момент у нас есть контроллеры и реализованы два действия
                                        index, которые перечисляют ресурсы, и действие show, которое отображает один ресурс.
                                        Мы уже знаем, что мы можем просто вернуть модели непосредственно из этих действий. А
                                        также мы знаем, что сериализация Laravel по умолчанию может быть легко изменена,
                                        если вы выполняете сериализацию моделируя, устанавливая этот защищенный скрытый
                                        массив, добавляя поля, которые вы не хотите сериализовать по умолчанию.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Продолжаем изучать</h4>
                                <p class="card-text">Продолжим изучать, как создавать rest API в Laravel. На данный момент у
                                    нас есть контроллеры и реализованы два действия index, которые перечисляют ресурсы, и
                                    действие show, которое отображает один ресурс. Мы уже знаем, что мы можем просто вернуть
                                    модели непосредственно из этих действий. А также мы знаем, что сериализация Laravel по
                                    умолчанию может быть легко изменена, если вы выполняете сериализацию моделируя,
                                    устанавливая этот защищенный скрытый массив, добавляя поля, которые вы не хотите
                                    сериализовать по умолчанию.
                                </p>

                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Теперь мы можем импортировать модель событий Event, поскольку мы будем
                                    часто ее использовать.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-73.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventController.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь разберемся, как добавлять маршруты, которые отвечают за
                                    добавление нового события или его модификацию, а затем удалить его.
                                </p>
                                <p class="card-text">Проведем обзор полного жизненного цикла Crud, который заключается в
                                    создании, чтении, обновлении и удалении. Начнем с действия store, которое отвечает за
                                    создание нового события.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-74.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Используем объект запроса, он имеет метод проверки. Определяем
                                    некоторые ограничения, некоторые ограничения проверки для нового события, которое мы
                                    собираемся сохранить. Определить ограничения проверки можно с помощью ключей и
                                    атрибутов.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-75.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Итак, если у нас есть событие, у него есть, скажем, атрибут name, а
                                    затем значение - это список всех ограничений, ограничений проверки, которые вы хотите
                                    применить к этому конкретному атрибуту. Имя должно быть строкой, а максимальное значение
                                    должно составлять 255 символов.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-76.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Давайте скопируем это и установим в качестве описания. Описание не
                                    обязательно, оно может быть обнулено, но оно должно быть строковым. Мы не указываем
                                    никаких ограничений на длину.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-77.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь добавим дату начала события, это обязательно, тип дата.</p>
                                <div class="pb-3">
                                    <img src="/images/block-78.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь дата окончания, это также должно быть указано, нам было бы
                                    полезно, если бы дата окончания была после даты начала. Для этого мы можем проверить
                                    данное условие на уровне валидаторов, используя after validator и передавая имя другого
                                    атрибута, которым является start_time.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-79.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Для события требуется задать столбец идентификатора пользователя.
                                    Поскольку у нас уже загружены некоторые пользователи, мы пока установим все созданные
                                    события по умолчанию так, чтобы они были связаны с пользователем с идентификатором 1.

                                </p>
                                <p class="card-text">Имея данные в виде массива проверенных данных, мы можем просто
                                    выполнить event model, create method, который создаст новую модель и немедленно сохранит
                                    ее внутри базы данных. И мы можем передать ей массив атрибутов. Таким образом, мы можем
                                    получить запрос, проверить и использовать оператор распространения. Копируем все
                                    элементы из этого массива в этот новый массив, потому что мы также должны установить
                                    идентификатор пользователя отдельно только на данный момент.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-80.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, у нас есть объект event, он нужен, потому что в rest API есть
                                    хорошее соглашение также возвращать ресурс, который был создан, или ресурс, который был
                                    обновлен.
                                </p>
                                <p class="card-text">Из этой конечной точки мы должны фактически вернуть вновь созданное
                                    событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-81.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь нам следует посмотреть, работает ли это. Для этого нам нужно
                                    открыть Postman. Убедитесь, что у вас открыта соответствующая рабочая область и что
                                    среда настроена на локальную. Открываем новый запрос.Используем базовый URL, чтобы нам
                                    не пришлось беспокоиться об URL. Мы знаем, что это \events, и если мы захотим что-то
                                    создать, мы будем использовать метод post. (можно проверить это, запустив PHP artisan
                                    route list, и убедится что у нас есть этот маршрут для добавления.)

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-82.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Создание чего-либо очень часто связано с методом post. Теперь давайте
                                    посмотрим, что произойдет, если мы просто отправим этот запрос. Вы также предоставляете
                                    тело запроса в какой-либо форме. Таким образом, все HTML-формы фактически используют
                                    данные этой формы, где есть некоторые ключи и значения. На самом деле это поля ввода.
                                </p>
                                <p class="card-text">В Postman мы также можно выбрать текст строки, а затем мы можем выбрать
                                    Json. Обычно в rest API вы отправляется и получается Json. Это не всегда так, но если вы
                                    создаете API-интерфейсы для использования другими пользователями, вам следует просто
                                    выбрать Json. Это самый популярный формат из всех.
                                </p>
                                <p class="card-text">Теперь здесь ожидаются некоторые поля, поэтому мы знаем, что требуется
                                    по крайней мере название или время.</p>
                                <p class="card-text">Отправив пустое тело мы получили обратно некоторый HTML-код. Мы видим
                                    главную страницу Laravel, начальную страницу, которая всегда создается, когда вы
                                    создаете новый проект. И причина этого в том, что Laravel пытается выяснить, какой
                                    формат вы ожидаете получить обратно. Мы не сказали Laravel, что ожидаем возврата Json.
                                    Что он сделал по умолчанию, так это столкнулся с некоторыми проблемами во время
                                    проверки.
                                </p>
                                <p class="card-text">Если вы работаете с традиционными веб-формами, когда происходит
                                    проверка ошибки, Laravel устанавливает некоторую переменную в сеансе, которая называется
                                    errors и перенаправляет на последний URL. Сейчас Laravel попытался сделать то же самое.
                                    У нас были ошибки проверки, поскольку мы не предоставили никаких данных, а требуется как
                                    минимум три поля, но мы не сообщили Laravel, в каком формате мы ожидаем, что он вернет
                                    ответ.

                                </p>
                                <p class="card-text">Мы используем значение по умолчанию, которым является HTML. Теперь,
                                    чтобы сообщить любому типу сервера, в основном это касается не только Laravel, но и
                                    любого типа Http-сервера, какого ответа вы ожидаете, следует задать некоторые конкретные
                                    заголовки.
                                </p>
                                <p class="card-text">Перейдем на эту вкладку заголовков и к этому конкретному имени
                                    заголовка. У него есть конкретное имя, которое называется Accept. По сути, вы сообщаете
                                    серверу, какой формат вы ожидаете. Ответом в формате Json будет Json приложения.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-83.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Теперь, когда вы снова нажимаете отправить, внезапно мы получаем ответ
                                    в формате Json, и в нем не только список, что это за сообщение о том, что у нас есть
                                    некоторые ошибки, но также у нас есть ключевые ошибки, в каждом поле или в каждом
                                    неверный параметр, а затем перечисляются все возможные сообщения об ошибках для этого
                                    поля. Это формат по умолчанию, в котором появляются ошибки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-84.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Но также вы должны заметить, что есть статус от 422. Это код состояния
                                    ошибки. И это то, что возвращает Laravel, когда возникают ошибки проверки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-85.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Если вы также работаете над клиентом для этого API, скажем, в Vue, или
                                    в React, или в мобильном приложении, вам придется принять это во внимание, что
                                    определенные интерфейсные библиотеки для выполнения Http-запросов будут рассматривайте
                                    этот код как ошибку. Так, скорее всего, например, в Axios вам придется обработать
                                    исключение, чтобы отобразить проверку ошибки.
                                </p>
                                <p class="card-text">Зная, в чем заключаются ошибки, давайте исправим их, предоставив
                                    действительный текст. В случае с Джейсоном это фигурные скобки, двойные кавычки, а не
                                    одинарные.
                                </p>
                                <p class="card-text">Название будет "первое событие", другое обязательное - "время начала".
                                    Дату окончания добавим раньше, чем дата начала, чтобы посмотреть, работает ли проверка
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-86.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Она сработала.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-87.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Давайте теперь предоставим некоторые действительные данные и снова
                                    нажмем отправить.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-88.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Таким образом, мы не разрешаем заполнять определенные свойства с
                                    помощью массового присвоения. Массовое назначение - это методы create update или make в
                                    модели, поэтому они позволяют вам заполнять некоторые свойства сразу.
                                </p>
                                <p class="card-text">Это означает, что мы должны перейти к событию и добавить защищенные
                                    заполняемые поля и указать поля, которые могут быть массово назначены. В качестве
                                    альтернативы, вы можете добавить другое свойство с именем guarded, где вы указываете
                                    поля, которые вы не хотите массово присваивать. Но это не считается хорошей практикой и
                                    следует избегать этого.Это подвержено ошибкам.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-89.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Event.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы должны установить идентификатор пользователя так, используя массовое
                                    присвоение, это должно решить нашу проблему. Теперь при повторном сохранении и отправке
                                    мы получаем результаты обратно.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-90.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Event.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, вы можете видеть, что мы получили данные в точности такими, как
                                    мы их указали, включая автоматически сгенерированные временные метки и идентификатор,
                                    который равен 201, потому что это первая запись после наших исходных данных. Но также
                                    обратите внимание, что когда вы сохраняете что-то внутри restful API, вы не получаете
                                    ответ 200, как когда вы извлекаете ресурсы. Вместо этого наилучшей практикой, является
                                    возврат кода 201.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-91.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь мы знаем, как сохранить новый ресурс.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Обновление и удаление данных -->
                 <div class="">
                    <div class="rounded-3" id="updating_deleting_data">

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Обновление и удаление данных</h4>

                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Продолжаем изучать</h4>
                                <p class="card-text">Мы еще не сохранили этот запрос, поэтому нам необходимо это сделать с
                                    помощью кнопки save.
                                </p>

                                <!-- *TODO - Фото-карточка кода -->
                                <div class="pb-3">
                                    <img src="/images/block-92.png" class="img-fluid" alt="...">
                                    <!-- <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventController.php</strong></p>
                                    </div> -->
                                </div>

                                <p class="card-text">После сохранения запрос попадает в коллекцию событий. Запрос назовем
                                    create an event.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-93.png" class="img-fluid" alt="...">
                                    <!-- <div class="card-body">
                                        <p class="card-text text-muted"><strong>EventController.php</strong></p>
                                    </div> -->
                                </div>

                                <h4 class="card-title pb-3">Функция обновления</h4>
                                <p class="card-text">Сейчас мы разберем как обновить существующие ресурсы, а затем как
                                    удалить ресурс.
                                </p>

                                <p class="card-text">Для этого перейдем к редактору кода. Здесь у нас есть действие для
                                    сохранения события, которое повторно использует часть этого кода. В частности, нам нужна
                                    часть проверки, поэтому давайте скопируем все из функции strore
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-94.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И вставим в функцию обновления</p>

                                <div class="pb-3">
                                    <img src="/images/block-95.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь мы будем использовать привязку модели маршрута, поэтому нам не
                                    нужен параметр ID. Вместо этого мы добавим извлечение события.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-96.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Сейчас мы ничего не создаем. Вместо этого мы хотели бы что-то сделать с
                                    существующим событием. Поскольку у нас также будет массив значений, кроме поля с
                                    идентификатором пользователя, потому что нам не нужно изменять владельца событий, по
                                    крайней мере, не нужно позволять пользователям напрямую делать это. Поэтому нам
                                    необходимо удалить строчку с идентификатором пользователя

                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-97.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Чтобы обновить событие, поскольку оно у нас уже выбрано, мы можем
                                    использовать метод model update, который принимает массив, где ключи являются
                                    атрибутами, а значения - значениями для этих атрибутов.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-98.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">С помощью этого мы можем передать результат проверки запроса
                                    непосредственно этому методу обновления. И так же теперь нам не нужен метод create
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-99.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Для корректной работы необходимо вернуть результаты.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-100.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь нужно изменить ограничения проверки. Например, когда вы
                                    обновляете ресурс, вам не следует требовать каждый отдельный атрибут.
                                    (Если только ваша бизнес-логика не такова, что при изменении некоторых атрибутов вы
                                    хотите изменить все из них.) Мы рассмотрим вариант, позволяющий разрешать пользователям
                                    просто изменять некоторые атрибуты. Для этого мы можем добавить вместо обязательного,
                                    ограничение проверки “иногда”.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-101.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь способ, которым это работает, заключается в том, что он будет
                                    проверять следующие ограничения проверки только через несколько раз, если значение
                                    присутствует во входных данных.
                                </p>
                                <p class="card-text">Теперь запустим PHP artisan route:list, чтобы посмотреть, как нам
                                    следует вызывать это действие обновления.(можно сделать это через консоль или через
                                    встроенный терминал VSCode)
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-102.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Консоль</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы видим, что у нас есть возможность использовать http-метод put или
                                    path. Через этот URL нам нужно передать идентификатор события.
                                </p>
                                <p class="card-text">Давайте проверим это. Прежде чем мы попытаемся изменить событие,
                                    давайте сначала выберем его, используя одиночный запрос события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-103.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Давайте используем идентификатор 1 и нажимаем кнопку отправить.
                                    Мы получаем данные.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-104.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Для того, чтобы ускорить создание запроса другого типа, можно
                                    продублировать существующий, выбрав вкладку дублировать.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-105.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Мы создаем аналогичный запрос, заменяя глагол на put, а также
                                    URL-адрес, чтобы изменить существующее событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-106.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">И также необходимо сохранить это как обновление события с помощью
                                    кнопки “сохранить как”.</p>
                                <div class="pb-3">
                                    <img src="/images/block-107.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-108.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Для проверки не будем изменять все атрибуты, просто изменим название.
                                    Напишем, что название этого события было изменено, и давайте нажмем отправить.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-109.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Мы получили ответ, но реальное тело возвращено не было.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-110.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Давайте посмотрим на единичное событие, было ли имя изменено.Для этого
                                    перейдем в запрос Single Event и отправим его. После этого мы увидим, что имя
                                    обновилось.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-111.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Проблема в том, что этот метод обновления возвращает логическое
                                    значение. Чтобы это исправить, нам необходимо вызвать event update. И сразу после этого
                                    вернуть само событие.(По сути, нам нужно переназначить эту переменную события.)
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-112.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь сохраните изменения и давайте попробуем обновить событие снова.
                                    Для этого используем какой-нибудь другой текст в качестве названия, чтобы мы могли
                                    убедиться в правильности проверки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-113.png" class="img-fluid" alt="...">

                                </div>
                                <p class="card-text">Итак, наше действие обновления также работает. Оно возвращает код 200,
                                    это стандарт для действия обновления.(201 - это только когда вы создаете ресурс, 200 -
                                    это нормально, когда вы обновляете ресурс) и хорошая практика также заключается в том,
                                    чтобы вернуть пользователю полный ресурс, который был изменен.
                                </p>
                                <p class="card-text">Сейчас давайте сохраним этот запрос с помощью кнопки save.
                                </p>

                                <h4 class="card-title pb-3">Функция удаления</h4>
                                <p class="card-text">Теперь посмотрим, как удалить ресурс. Для этого вернемся к редактору
                                    кода. Внутри действия destroy мы можем использовать привязку модели маршрута для быстрой
                                    выборки события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-114.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Затем, как правило, мы вызываем этот метод удаления в модели, а затем
                                    мы должны что-то вернуть. Когда мы удаляем ресурс, мы не должны возвращать ресурс,
                                    потому что он больше не существует. Давайте отправим ответ в формате Json и просто
                                    передадим сообщение. Таким сообщением может быть то, что событие успешно удалено.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-115.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Проверим работоспособность нашего кода, для этого переходим в Postman.
                                    Дублируем вкладку запроса Update an event. Для удаления мы, очевидно, используем глагол
                                    delete.Нам нужен URL.Тела запроса нет.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-116.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Нажимаем кнопку отправить и видим сообщение, что ресурс был успешно
                                    удален
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-117.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Давайте сохраним этот запрос(ранее подробно описывался процесс
                                    сохранения запроса) Как удалить событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-118.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-119.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Итак, если мы попытаемся отправить этот запрос снова, мы должны
                                    получить 404, потому что он больше не существует, это должно быть обработано привязкой
                                    модели маршрута.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-120.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Теперь альтернативой в Rest API является изменение кода и не возвращать
                                    никаких ответов при удалении материала. Функция response позволяет передавать код в
                                    качестве второго параметра. В самых последних версиях PHP вы можете использовать
                                    именованные параметры, поэтому мы можем просто указать статус и код для отсутствия
                                    содержимого(no content) равно 204. Теперь очевидно, что с кодом no content вы не
                                    возвращаете никакого содержимого.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-121.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, это все, что вы бы вернули. Теперь, если вы используете более
                                    старую версию PHP, то первым параметром должна быть просто пустая строка а вторым
                                    параметром значение.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-122.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Но начиная с PHP 8 и выше вы можете использовать именованные параметры,
                                    подобные этому.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-123.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Помните, вы не отправляете никакого тела с ответом, когда передаете
                                    статус 204, потому что это означает что содержимое недоступно, и это обычная практика
                                    при удалении ресурсов.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-124.png" class="img-fluid" alt="...">

                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION - Ресурсы  API-управление ответом JSON-->
                <div class="">
                    <div class="rounded-3" id="JSON_API_resources">


                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Ресурсы API-управление ответом JSON</h4>

                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Ресурсы API</h4>
                                <p class="card-text">Итак, давайте поговорим о ресурсах API, которые являются способом
                                    настройки того, как ваши данные из ваших eloquent models преобразуются в ответы Json.
                                    Теперь Laravel может преобразовывать eloquent models в Json без использования ресурсов
                                    API. По умолчанию он будет использовать метод toJson, который есть в каждой отдельной
                                    модели eloquent. Если вы быстро перейдете к коду модели событий, к базовому классу
                                    модели и выполните поиск по методу toJson, вы увидите, что он присутствует в модели.
                                    Теперь единственное, что вы можете добавить для управления сериализацией объектов.
                                </p>

                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text">Используем пользовательскую модель в качестве примера.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-125.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Event.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Вы можете определить некоторые поля, которые не должны
                                    сериализовываться, используя это скрытое свойство. Таким образом, они никогда не будут
                                    сериализованы по умолчанию в пользовательской модели. Теперь, чтобы иметь больше
                                    контроля, вам придется использовать ресурсы API.
                                </p>

                                <p class="card-text">Первым шагом будет создание нового ресурса, что можно сделать с помощью
                                    команды make resource. Перейдите в командную строку. введем команду php artisan make
                                    resource EventResource, начнем с ресурса события, нажав enter.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-126.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Он должен быть сгенерирован внутри папки Http resources.</p>

                                <div class="pb-3">
                                    <img src="/images/block-127.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Можем заметить, что этот класс наследует JsonrRsource, и метод, который
                                    нам здесь интересен - toArray. Мы реализуем, как конкретный ресурс должен быть
                                    преобразован в Json. Имейте в виду, что, несмотря на то, что мы вызвали этот ресурс
                                    события, этот класс никоим образом не привязан напрямую к модели события или контроллеру
                                    событий. Поэтому нам придется явно использовать эти классы ресурсов. Мы все еще можем
                                    использовать его для модели событий, и, более того, у нас может быть много классов
                                    ресурсов для одной единственной модели, на случай, если вы захотите сериализовать ее для
                                    разных видов выходных данных..
                                </p>
                                <p class="card-text">Теперь базовая реализация уже существует, так что мы можем начать с
                                    фактического использования этого ресурса событий. Переходим в файл EventController.php
                                    Сначала мы изменим действие index, чтобы класс resource можно было использовать как для
                                    возврата коллекции конкретных ресурсов, где каждый элемент в этой коллекции будет
                                    преобразован с помощью этого метода в массив, так и только для одного ресурса.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-127.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Не забудьте импортировать класс
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-128.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь вы могли бы использовать этот класс ресурсов для коллекций,
                                    введя ресурс event. У него есть статический метод сбора, которому вы просто передадите
                                    массив ресурсов, который является результатом события. Теперь давайте отправим запрос
                                    AllEvents и посмотрим, каков результат.
                                </p>
                            </div>
                            <div class="pb-3">
                                <img src="/images/block-129.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Обратите внимание, как изменился ответ. Сейчас это не массив, как было
                                раньше. У нас есть свойство data, и оно добавляется классом ресурсов. В data у нас есть
                                некоторые события, фактически все из них.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-130.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Ресурсы API позволяют вам иметь больше полей, чтобы добавить мета-поля(о
                                них мы поговорим позже). Самая большая разница, которую мы можем видеть прямо сейчас,
                                заключается в том, что все заключено в свойство data.
                            </p>
                            <p class="card-text">Таким образом, чтобы вернуть один запрос, вы также могли бы использовать
                                этот ресурс события, но на этот раз создав новый его экземпляр, которому передается событие
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-131.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Теперь снова перейдите к Postman и извлеките одно событие из тех, которые
                                мы не удалили. И теперь все также заключено в свойство data.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-132.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Теперь нужно обернуть каждый ответ внутри этого ресурса событий. Когда вы
                                сохраняете, вы также создаете новый экземпляр ресурса событий, передавая событие.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-133.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Эта же механика должна быть при обновлении.</p>
                            <div class="pb-3">
                                <img src="/images/block-134.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Итак, мы внедрили этот ресурс для каждого отдельного ответа, который мы
                                получаем от этого контроллера. Теперь давайте посмотрим, как мы можем изменить или настроить
                                то, что возвращается из такого ресурса. Потому что, просто обернув ответ классом, вы знаете,
                                очевидно, что это не очень полезный ресурс дает нам множество возможностей.
                            </p>
                            <p class="card-text">Сначала реализуем метод toArray. Начнем с его настройки. Давайте просто
                                вернем массив. Итак, первое, что вы можете сразу увидеть, это то, что мы можем настраивать
                                имена атрибутов, что возвращается из API. Возвращаемый Json не обязательно должен быть
                                идентичен тому, что мы имеем внутри модели eloquent. Теперь у вас есть все данные модели
                                внутри этого, поэтому вы можете использовать этот идентификатор, и это будет соответствовать
                                атрибутам из модели. Также есть имя, и его можно получить, используя это имя. И описание.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-135.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventResource.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Итак, нашим первым вариантом использования было бы ограничить некоторые
                                свойства. Мы извлекаем одно событие и получаем только три свойства (это вариант
                                использования, в котором вы хотели бы скрыть атрибуты). То же самое произойдет с
                                коллекциями, поскольку мы используем точно такой же ресурс (возвращено только три свойства).
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-136.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Нам не нужно скрывать свойства, поэтому пропишем возвращение всех значений
                                внутри функции toArray.(можно настроить способ выведения даты, использовав какой-либо
                                пользовательский формат, но мы это делать не будем)
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-137.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventResource.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">На данный момент, если мы проверяем API, мы просто возвращаем данные в
                                формате, который был у нас изначально.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-138.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Может показаться, что добавление ресурсов - это просто дополнительная
                                работа без каких-либо преимуществ, но это не так. С ресурсами есть несколько интересных
                                дополнительных опций.

                            </p>
                            <p class="card-text">Вспомним, что у каждого события есть этот столбец идентификатора
                                пользователя, который указывает на владельца определенного события(человек, который
                                организует мероприятие). При получении всех событий может понадобиться отобразить также имя
                                организатора, если у вас сразу возвращается 100 событий или даже 200, как у нас в этом
                                случае, будет неэффективно сначала получить все события, а затем попытаться выполнить,
                                скажем, 100 запросов для каждого отдельного пользователя просто для отображения организатора
                                событий, чтобы мы могли создать некоторые вложенные ресурсы внутри такого события ресурс,
                                условно загрузив пользователя.

                            </p>
                            <p class="card-text">Посмотрим, как мы можем это сделать. Создадим другой ресурс для
                                пользователя.Теперь мы будем генерировать классы ресурсов для каждой модели, которую мы
                                возвращаем из API. Для этого в консоли вводим команду php artisan make:resource UserResource

                            </p>
                            <div class="pb-3">
                                <img src="/images/block-139.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Мы создаем этот класс, чтобы использовать значения по умолчанию ( мы не
                                будем его настраивать прямо сейчас). Оставляем реализацию по умолчанию, которая будет
                                работать в основном как метод toJson, который встроен в Laravel.
                            </p>
                            <p class="card-text">Необходимо добавить необязательное поле с именем user, и создать новый
                                пользовательский ресурс, но не передавать пользователя, связанного с этим событием. Вместо
                                этого будем использовать метод ресурса, вызываемый при загрузке, и передадим имя связи. (не
                                забывайте импортировать класс в файле)

                            </p>
                            <div class="pb-3">
                                <img src="/images/block-140.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventResource.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Перейдем к модели события(файл Event.php). Пользователь, по сути, является
                                организатором события, и при использовании метода “при загрузке” ресурс Json, произойдет,
                                то, что пользовательское свойство будет присутствовать в ответе только в том случае, если
                                загружено это пользовательское отношение конкретного события.
                            </p>
                            <p class="card-text">Если извлечь все события, можно увидеть, что пользователя нет, потому что
                                мы не загружали отношения с пользователем вместе со всеми событиями, и мы не делали этого с
                                одним событием.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-141.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Попробуем изменить это. Переходим в файл EventController.php , сейчас мы
                                выполняем запрос всех событий event all. Нужно добавить возможность провести мероприятие с
                                пользователем и получить данные.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-142.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">На этот раз мы будем загружать все события вместе с отношениями с
                                пользователем. Посмотрим, что происходит сейчас. Переходим к списку событий и при запросе у
                                нас появляется пользователь, со всеми его данными, сериализованными с использованием
                                сериализатора по умолчанию. И у нас есть пользователь, владелец события для каждого
                                отдельного события.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-143.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">При загрузке одного события все еще нет пользователя, потому что мы его не
                                загрузили и нам нужно это сделать. Итак, если уже есть событие, вы можете выполнить загрузку
                                события и передать имя отношения(пользователя).
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-144.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Теперь пользователь отображается при запросе на конкретное событие.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-145.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Вы можете использовать этот ресурс при загрузке для загружения одного
                                отношения или даже набора ресурсов. Допустим, у события также есть участники. В этом случае,
                                можно создать участников и использовать ресурс attendee. Создадим ресурс участника.(команда
                                для создания ресурса была представлена ранее).
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-146.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">Сейчас мы будем использовать значения по умолчанию, поэтому используем
                                статичный ресурс участника, и используем коллекцию методов, для перечисления участников, а
                                внутри мы делаем тоже самое, но используя метод при загрузке участников.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-147.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventResource.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Для корректного отображения, нам нужно загрузить участников при запросе
                                конкретного события(ранее таким же образом мы загрузили пользователя).
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-148.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Теперь отображаются все участники. Теперь вы можете видеть, что у самого
                                участника также есть идентификатор пользователя.
                                (В этом проекте мы также увидим примеры того, как можно полностью контролировать, какие
                                вложенные ресурсы загружаются. И увидим способ, как управлять этим с помощью параметров
                                запроса. Таким образом, вы создадите надежные и гибкие API и сможете решать из своего
                                интерфейсного приложения или мобильного приложения, какие данные вам нужны).

                            </p>
                            <div class="pb-3">
                                <img src="/images/block-149.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Нумерация страниц -->
                 <div class="">
                    <div class="rounded-3" id="page_numbering">
                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Нумерация страниц</h4>

                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Продолжаем работать дальше</h4>
                                <p class="card-text">В нашем API есть события и посетители. Мы создали отдельный контроллер
                                    для участников, и, как напоминание, участники на самом деле всегда являются частью
                                    переменных событий (это также отражено в маршрутах). У нас имеется ресурс API, который
                                    ограничен областью действия, поэтому каждый посетитель является частью мероприятия.
                                </p>
                                <p class="card-text">Сейчас этот контроллер не реализован, поэтому сейчас мы это исправим.
                                    Также мы поговорим о разбивке результатов на страницы.
                                </p>

                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text">Начнем с реализации действия index, которое, как предполагается,
                                    содержит список всех участников определенного мероприятия. Переходим в файл

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-150.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Это приведет к получению одного аргумента, который будет моделью
                                    события. Сначала давайте импортируем его, а затем вернемся к файлу API.php. Контроллер
                                    участника ограничен для события (если вы посмотрите все маршруты через консоль, вы это
                                    заметите). Каждый маршрут, который касается участников, также имеет событие в качестве
                                    параметра, поэтому участники не могут существовать сами по себе, они всегда являются
                                    частью определенного события.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-151.png" class="img-fluid" alt="...">

                                </div>

                                <p class="card-text">Допустим, рассмотрим использование привязки модели маршрута для выборки
                                    одного отдельного участника. Как это будет работать: Laravel построит запрос таким
                                    образом, чтобы убедиться, что этот участник действительно является частью определенного
                                    события. В противном случае отобразит ошибку.
                                </p>
                                <p class="card-text">По сути, возможность выбора только участников определенного мероприятия
                                    защищает нас от попытки другими людьми угадать участников с других мероприятий по
                                    идентификатору.
                                </p>
                                <p class="card-text">Поскольку событие также является частью URL-адреса, мы можем просто
                                    извлечь событие, а затем получить участников этого события и вернуть их из этого
                                    контроллера.
                                </p>
                                <p class="card-text">Посмотрим, как мы можем получить участников. Для этого поместим их в
                                    переменную. У нас уже есть само событие, благодаря нему можно получить участников и
                                    людей, которые зарегистрировались совсем недавно. И затем мы можем вернуть ресурс
                                    участника (который мы уже создали перед сбором) и использовать разбиение участников на
                                    страницы (мы использовали этот метод раньше).
                                </p>
                                <p class="card-text">Создается простой механизм разбиения на страницы, который автоматически
                                    генерирует некоторый HTML-код, если вы передаете его в blade-представление, это также
                                    будет автоматически работать с API.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-152.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Сохраним изменения и переходим к Postman. Дублируем вкладку запроса All
                                    Events. Будем использовать 10-е событие и в нем искать участников.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-153.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Есть данные, есть некоторые участники, некоторые данные о посетителях,
                                    но если вы прокрутите вниз, мы должны увидеть некоторые дополнительные метаданные.
                                    Во-первых, это ссылки, которые дают вам переадресацию на следующие страницы (здесь
                                    только одна страница, но если их будет больше, вы увидите все).

                                </p>
                                <p class="card-text">Также автоматически отслеживается текущая страница, так что есть
                                    возможность автоматически передавать такие параметры, как страница и Laravel определит,
                                    что ему нужно отобразить (он автоматически разбивает данные на страницы). Также имеется
                                    мета-поле, которое отображает текущую страницу. Также некоторые дополнительные ссылки,
                                    которые можно использовать, например, в вашем интерфейсном приложении, например, внутри
                                    react или view для отображения ссылок на следующие страницы (это также дает некоторую
                                    базовую информацию об этих отображаемых текущих данных).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-154.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Также отображается URL, сколько информации, сколько ресурсов
                                    отображается на странице, каково общее количество ресурсов и каков последний индекс
                                    результатов этой страницы?
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-155.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Таким образом, вы получаете это автоматически, просто передавая
                                    результат этой разбивки на страницы. В качестве напоминания, использование этой связи
                                    вызовом метода создает конструктор запросов. Мы используем встроенную локальную область
                                    запроса latest и now и как объект конструктора запросов, который мы затем выполняем,
                                    вызывая paginate. Итак, далее store.

                                </p>
                                <p class="card-text">Вероятно,на данный момент уже очевидно, что делают эти методы. И если
                                    вы будете придерживаться этого базового набора грубых имен методов, грубых действий в
                                    каждом отдельном контроллере, будет действительно легко запомнить, что должно делать
                                    каждое действие и за что оно отвечает. Store отвечает за добавление нового участника
                                    (это может понадобиться, чтобы посетить конкретное мероприятие, и нам необходимо
                                    сохранить эту информацию).

                                </p>
                                <p class="card-text">Итак, у нас есть запрос, но также мы получаем событие. Это часть
                                    маршрута каждого отдельного участника-контролера.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-156.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Определенно нужно создать новый экземпляр участника, но мы сделаем это
                                    через event(событие, у которого есть связь с участниками, и затем мы будем использовать
                                    метод create).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-157.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь участник также связан с пользователем, что означает, что у него
                                    есть идентификатор пользователя, который мы должны заполнить вручную. Сейчас мы не
                                    поддерживаем пользователей внутри нашего приложения (мы сделаем это позже).
                                </p>
                                <p class="card-text">Сейчас нам нужно передавать данные вручную, используя некоторые
                                    идентификаторы пользователей, которые у нас есть в базе данных. Чуть позже мы это
                                    исправим. Давайте пока воспользуемся идентификатор 1.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-158.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь, поскольку мы используем create, это означает, что это операция
                                    массового присвоения. Это означает, что каждый атрибут, используемый внутри массового
                                    присвоения, должен быть добавлен к свойству fillable внутри модели, которая является
                                    идентификатором пользователя.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-159.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Attendee.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь, также, если вы хотите автоматически создать модель и затем
                                    связать ее с некоторой родительской моделью, например, мы хотим создать участника и
                                    связать его с событием, для этого можно использовать метод relationship родительской
                                    модели, а затем вызвать create для него. Это не только создаст нового участника, но и
                                    автоматически установит событие этого участника в соответствии с моделью события,
                                    которая у нас есть.
                                </p>
                                <p class="card-text">На этом этапе, нам не нужно вызывать save, потому что create не только
                                    создает модель, но и мгновенно сохраняет ее в базе данных. Поэтому нам нужно просто
                                    вернуть новый экземпляр ресурса attendee с созданным участником (чуть позже мы это
                                    протестируем).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-160.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь перейдем к методу show, из этого метода оболочки, у нас здесь
                                    есть идентификатор, который заменим на событие и вернем новый экземпляр ресурса
                                    участников, передавая attendee.
                                    (убедитесь, что модель импортирована).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-161.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Этот участник будет выбран таким образом, что он будет привязан к
                                    событию.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-162.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Нам нужно удалить передачу аргумента в файле api.php, чтобы Laravel мог
                                    самостоятельно выяснить, какова связь между моделями. Laravel автоматически привязал
                                    этого участника к этому событию, поэтому мы получаем данные.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-163.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл api.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь найдем конкретного участника, для этого используем тот же
                                    идентификатор события, который мы использовали ранее и дублируем вкладку запроса. (Так,
                                    например, в разделе участники для этого мероприятия с идентификатором десять у нас есть
                                    участник, у которого есть этот идентификатор. Его и выберем.)
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-164.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> После участников через / “слеш” пишем нужный нам id и необходимая нам
                                    информация находится.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-165.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> Но если придумать случайное значение, т.е. использовать участника,
                                    который не принадлежит к этому конкретному событию - отобразится ошибка 404.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-166.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> Теперь, наконец, давайте создадим и протестируем на конечной точке
                                    удаление участника. Сделаем это, продублировав эту вкладку.
                                    Итак, мы хотим удалить конкретного участника с конкретного мероприятия. Глагол нужно
                                    изменить на delete. Мы по-прежнему принимаем Json приложения. Необходимо проверить
                                    заголовки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-167.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> Теперь перейдем к коду, нам нужно реализовать этот метод уничтожения.
                                    Поскольку у root есть два аргумента, мы получим первый в качестве события и только
                                    второй будет указан с помощью. Причина, по которой мы это делаем, заключается в том, что
                                    эти аргументы будут переданы этому методу в том же порядке как мы их определили внутри
                                    route. Первый аргумент - event, а второй - attendee. Теперь нам не нужна модель событий.
                                    Таким образом, мы можем просто удалить участника, а затем вернуть ответ, используя
                                    функцию ответа.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-168.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text"> Итак, у нас есть удаление, у нас есть правильный URL. Это означает,
                                    что он должен быть удален, если я сейчас выберу этого участника. Мы должны получить 404.
                                    Он не должен быть найден, и его также не должно быть в списке участников этого
                                    конкретного мероприятия.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-169.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> Мы еще не тестировали добавление нового участника. Давайте
                                    продублируем эту вкладку еще раз. В этот раз используем метод post (здесь не нужны
                                    никакие параметры). Мы принимаем Json приложения в качестве ответа.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-170.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text"> Нам не нужно отправлять какие-либо дополнительные параметры. Если
                                    нажать кнопку отправить, новый участник будет добавлен на это мероприятие.
                                </p>
                                <p class="card-text"> Теперь нужно будет войти в систему, чтобы посетить мероприятие, и
                                    здесь будет возвращен ваш идентификатор пользователя. Поскольку у нас еще нет
                                    аутентификации пользователя, мы просто устанавливаем идентификатор пользователя как
                                    фиксированный. Но мы видим, что участник был добавлен. Если проверить список участников,
                                    отсортированный по самым последним, мы увидим этого нового участника.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-171.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Поскольку мы удалили действие update, мы должны обновить это
                                    определение маршрута, вызвав метод accept и указав, что нам не нужен метод update.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-172.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл api.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Если снова запустить PHP artisan root list, данный путь должен
                                    исчезнуть. Также следует разбить события на страницы внутри контроллера событий. Вместо
                                    использования get давайте воспользуемся paginate.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-173.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Далее мы продолжим загрузку связей условно.
                                </p>
                            </div>
                        </div>
                    </div>

                 </div>

                  <!-- *!SECTION - Необязательная загрузка отношений -->
                <div class="">
                    <div class="rounded-3" id="optional_relationship_loading">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Загрузки отношений</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Необязательная загрузка отношений </h4>
                                    <p>Вернемся к событиям. Посмотрим на этот запрос "все события" и вспомним, как он
                                        выглядит.
                                        Теперь он разбит на страницы, но мы по-прежнему всегда получаем связанного
                                        пользователя.
                                        Ранее мы освещали, что, возможно, мы захотим необязательно загружать некоторые
                                        отношения. Нам необходимо как-то контролировать это. Обратите внимание, что не
                                        каждый
                                        API требует контролировать, какие отношения должны быть загружены, и есть разные
                                        способы
                                        решить данный вопрос. Сейчас мы рассмотрим очень простое решение того, как это можно
                                        сделать быстро и эффективно в Laravel.
                                    </p>
                                    <p>Итак, мы сможем загрузить все взаимосвязи для этой конкретной конечной
                                        точки, перечислив все события, а позже рассмотрим универсальное решение, которое
                                        может
                                        работать с каждым отдельным контроллером и каждым отдельным действием.
                                    </p>
                                    <p>Разберемся, в чем заключается решение. Мы будем включать отношения не обязательно,
                                        просто передавая параметр запроса в URL. Параметры запроса указываются после
                                        вопросительного знака, и это будет называться include. Теперь каждое имя отношения
                                        будет стоять после запятой. Таким образом, может быть, скажем, include equals user,
                                        но, возможно, у него также могут быть участники. И в Laravel вы также можете
                                        загружать вложенные отношения.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Вернемся к событиям.</h4>



                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text">Участники также имеют отношение к пользователю. Таким образом, мы также
                                    можем указать параметр “attendees.user”, и это отношение будет загружено с этим
                                    участником
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-174.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Теперь, при отправке этого запроса ничего не происходит, потому что он
                                    еще не реализован. Но давайте сначала посмотрим, как мы можем проанализировать этот
                                    параметр include, чтобы преобразовать его в массив, а затем можем ли мы использовать
                                    этот массив связей для загрузки определенных связей по требованию.
                                </p>

                                <p class="card-text">Итак, давайте перейдем к коду. Первым шагом нужно проанализировать эти
                                    параметры запроса. Параметр запроса называется include и нам нужно преобразовать его в
                                    массив значений. Мы будем работать внутри метода index, но мы также можем добавить
                                    вспомогательный метод(он будет защищенным). Он примет один строковый параметр,
                                    называемый отношением, и вернет логическое значение.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-175.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Он должен сообщить нам, следует ли включать конкретное отношение или
                                    нет. Сначала определим включаемую переменную. Теперь нам не нужно передавать объект
                                    запроса этому методу, потому что в Laravel, так же как и при создании ответа, вы можете
                                    получить текущий запрос, используя функцию запроса. И у него есть метод запроса, который
                                    позволяет вам получить параметр запроса ( у нас запрос называется include).
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-176.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь вы также можете указать значение по умолчанию для каждого
                                    параметра запроса, и по умолчанию это значение по умолчанию
                                    будет равно null, и нас это устраивает. Теперь давайте сделаем вывод данных с названием
                                    include.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-177.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И давайте просто вызовем этот метод внутри index, чтобы посмотреть,
                                    будет ли он вызван. Вызываем user с помощью отношения.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-178.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Отправим этот запрос, перейдем к предварительному просмотру. На данный
                                    момент мы видим, что получаем параметр, который представляет собой список, разделенный
                                    запятыми.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-179.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Сейчас наша цель - преобразовать его в массив. Но сначала, если этот
                                    параметр равен null, мы можем проверить, является ли он true или false (он вернет false,
                                    если include будет равен null). На этом этапе мы напишем проверку: если это значение
                                    равно null, мы просто вернем false из этого метода. Оношение, которое было передано в
                                    качестве аргумента, не должно быть включено.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-180.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь определим еще одну переменную.Назовем ее “relations”. Теперь мы
                                    будем использовать встроенную в PHP функцию explode, которая позволяет преобразовать
                                    строку в массив, используя определенный разделитель. В нашем случае это запятая и
                                    параметр include. Переменная include содержит эту строку. Также заменим переменную в
                                    выводе данных.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-181.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь все это преобразовано в массив.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-182.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Но давайте посмотрим, что произойдет, если вы добавите сюда случайный
                                    пробел.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-183.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Мы получили имя отношения с пробелами, поэтому можно ошибочно
                                    предположить, что это отношение не будет загружено, потому что оно не будет
                                    соответствовать фактическому имени отношения, которое у нас есть.
                                </p>
                                <p class="card-text">Учитывая это, мы также должны передать результат explode через
                                    встроенную функцию array_map. Сначала нужно скопировать функцию explode и разместить ее
                                    в внутрь функции Array_map. Так как нам необходимо просмотреть каждый результат, который
                                    explode сгенерировал бы с помощью функции trim.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-184.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Таким образом, это вызовет определенную функцию, либо используя
                                    обратный вызов, либо просто имя функции.
                                </p>
                                <p class="card-text">Итак, trim - это, по сути, встроенная функция PHP, которая удалит все
                                    начальные пробелы и все конечные пробелы из любой строки. Таким образом, Array_map
                                    запустит trim для каждого элемента массива, возвращаемого explode. Теперь у нас
                                    корректно записываются отношения даже с пробелами.
                                </p>
                                <img src="/images/block-185.png" class="img-fluid" alt="...">
                                <p class="card-text">Мы можем возвращать данные в виде массива без использования dd(). Для
                                    этого мы воспользуемся еще одной встроенной функцией in_array() .Итак, мы проверяем,
                                    находится ли конкретное отношение, переданное этому методу, внутри массива relations.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-186.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь мы можем использовать его внутри index для построения
                                    конкретного запроса. В строке 17 мы вызвали метод shouldincluderelation, просто чтобы
                                    посмотреть, работает ли он. Теперь давайте применим его в реальных условиях. Первое, что
                                    мы должны сделать в этом методе index, - это определить массив отношений. Нам нужно
                                    четко указать, какие отношения могут быть загружены с событием. Мы не можем позволить
                                    пользователям указывать случайные отношения. Имена внутри этого параметра include, нам
                                    нужно четко указать, что может быть загружено в первую очередь. Мы разрешаем загружать
                                    пользователя с мероприятия, после мы разрешаем загружать участников и мы разрешаем
                                    загружать пользователя-участника.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-187.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь здесь мы создаем запрос в строке 20, просто вызывая событие,
                                    загружающее одно отношение, и разбивая его на страницы. Таким образом, вместо этого мы
                                    можем создать запрос в первой строке, используя метод запроса событий. Это запустит
                                    конструктор запросов для этой модели событий. Далее мы будем дополнять этот запрос
                                    чем-то необязательным.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-188.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы можем использовать цикл for each для перебора всех отношений,
                                    которые у нас есть внутри нашего массива. Итак, отношения имеют отношение. И теперь с
                                    каждым отношением мы хотим что-то сделать с нашим запросом. В запросе есть или каждая
                                    модель, каждый экземпляр построителя запросов имеет этот метод when. Когда первый
                                    аргумент, переданный этому методу, имеет значение true, он запустит вторую функцию,
                                    которая может изменить запрос, который назовем Q, а не, как вы знаете, ошибочно в этом
                                    родительском запросе. И тогда мы можем сделать Q с именем отношения и использовать его.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-189.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И затем с ресурсом event, вместо создания нового запроса, у нас уже
                                    есть запрос с всеми необходимыми отношениями, указанными для загрузки. Таким образом, мы
                                    можем просто выполнить разбиение запроса на страницы на этом этапе или можем выполнить
                                    разбиение запроса на последние страницы для извлечения из самых последних событий.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-190.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Посмотрим как теперь все работает. Для некоторых событий у нас не
                                    отображаются участники.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-191.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">А у некоторых событий отображаются списки пользователей и участников и
                                    тогда для каждого посетителя у нас также есть пользователь.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-192.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Изменим параметр include, чтобы убедиться, что он действительно
                                    работает.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-193.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">В этом случае мы загружаем владельца события и участников, но без
                                    фактического пользователя. Мы также можем загружать только владельца события или,
                                    возможно, только участников в зависимости от потребности.

                                </p>
                                <p class="card-text">Теперь мы контролируем, что может быть загружено, а что нет.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Универсальный признак загрузки отношений -->
                 <div class="">
                    <div class="rounded-3" id="a_universal_feature">
                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Универсальный признак загрузки отношений</h4>
                                    <p>До этого мы выяснили простой способ, который позволил бы нам включить некоторые
                                        дополнительные отношения, загрузить их по требованию, используя специальный параметр
                                        запроса, называемый include, где все загружаемые отношения просто добавлены к этому
                                        аргументу include, и разделены запятой. Теперь мы можем повторно использовать этот
                                        код для других действий, отличных от index, внутри контроллера событий.
                                    </p>
                                    <p>И для создания такого рода общей логики мы можем создать так называемый трейт.
                                        Создадим новый трейт в Laravel.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Трейт в Laravel</h4>



                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text">Сначала разберемся том, что такое трейт. Если вы не знаете, что это
                                    такое, давайте посмотрим пример. Для этого откроем нашу модель событий. И вы увидите
                                    трейт, используемый здесь. Он называется has factory. Теперь трейты добавлены в классы.
                                    Они всегда добавляются и используются внутри классов. Для добавления трейта в класс
                                    используется ключевое слово use и название трейта, которое должно быть импортировано
                                    так, как вы импортировали бы класс.
                                </p>
                                <p class="card-text">Теперь давайте перейдем к этому трейту. Итак, вы определяете трейт
                                    используя ключевое слово, название трейта, фигурные скобки, а затем размещаете некоторый
                                    код внутрь (например методы). Все, что касается трейтов, заключается в том, что как
                                    только трейт используется в классе, все методы из него будут добавлены в класс.
                                </p>
                                <p class="card-text">Это похоже на микширование в других языках. Это позволяет вам добавить
                                    некоторую дополнительную функциональность к классу без использования наследования
                                    какого-либо базового класса. Теперь, поскольку трейты - это, по сути, обычная
                                    конструкция PHP, они на самом деле не должны делать ничего конкретного с самим Laravel.
                                </p>
                                <p class="card-text">Мы создадим их вручную, для этого создаем новую папку с названием
                                    traits внутри папки Http.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-194.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Создадим новый файл с названием CanLoadRelationships.php.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-195.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Итак, поскольку мы создали файл вручную, нам нужно добавить тег PHP и
                                    определить пространство имен.И это будет атрибут http, такой же, как имя папки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-196.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь определим наш атрибут. Он называется can load relationships.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-197.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь добавим сюда метод. Мы выполняем общедоступную функцию. Добавим
                                    метод, который будет называться load relationships. И у него будут некоторые аргументы.
                                    У него будет либо модель, либо экземпляр построителя запросов. И затем мы должны
                                    передать имя загружаемого отношения или список доступных отношений.

                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-198.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Сначала давайте передадим первый аргумент. Мы будем вызывать $for,
                                    поскольку это означает, что мы загружаем отношения для чего-то либо модального, либо для
                                    построителя запросов. Теперь используем универсальный модальный класс. Убедитесь, класс
                                    импортирован.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-199.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Помимо этого, $for также может иметь тип builder. И бывает так, что
                                    существуют разные классы builder (query builder и eloquent builder). Мы добавим оба.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-200.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Нельзя импортировать два класса, которые называются одинаково, поэтому
                                    придется использовать псевдонимы.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-201.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Хорошо, теперь мы должны использовать оба класса в качестве
                                    необязательного типа для переменной for. Есть либо модальный конструктор запросов, либо
                                    eloquent builder.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-202.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Также добавим массив, называемый relations и скопируем некоторый код из
                                    контроллера событий(EventController). Мы возьмем цикл и вставим его в трейт.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-203.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы перебираем все отношения, которые были бы переданы сейчас в качестве
                                    аргумента этому методу. Тогда у нас функция должна включать отношение. У нас нет функции
                                    shouldIncludeRelathion внутри трейта, поэтому давайте перенесем ее из контроллера
                                    событий в трейт, потому что его можно использовать повторно. Предполагается, что он
                                    будет использоваться в разных контроллерах.(из файла EventController функцию нужно
                                    удалить).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-204.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">В файле EventController мы используем эту функцию запроса, которая
                                    позволяет вам добавить глобальный доступ к текущим переменным запроса. Нам не нужно
                                    передавать объект запроса этому методу. Поэтому нам нужно заменим здесь объект запроса,
                                    которого у нас нет внутри этого метода, на for.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-205.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">В экземплярах models, и в экземплярах query builder есть метод when.
                                    Теперь нам нужно сделать что-то необязательное.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-206.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, если эта переменная for является экземпляром model, мы загружаем
                                    процессор, потому что модель уже загружена, поэтому для нее не будет доступен метод
                                    with. Таким образом, этот экземпляр является встроенным ключевым словом PHP. Это
                                    позволит проверить, каков тип класса конкретного объекта.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-207.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Функция должна возвращать for.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-208.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Давайте убедимся, что возвращаемый тип также совпадает с приведенными
                                    здесь параметрами. Скопируйте и вставьте их.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-209.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь параметр массива отношений полезен только в том случае, если вы
                                    хотите настроить, какие отношения могут быть загруженным для каждого отдельного действия
                                    в контроллере. Поэтому зачастую нам необходимо настраивать функции, если они будут
                                    использоваться повторно.
                                </p>
                                <p class="card-text">Но вы также можете использовать другой подход, чтобы у вас были
                                    некоторые значения по умолчанию. Допустим, что каждое действие должно иметь возможность
                                    загружать одно и то же отношение, допустим, контроллер событий имеет те же отношения,
                                    которые загружаются в каждом отдельном действии. Вместо этого мы можем выбрать просто
                                    использование поля, которое было бы определено в классе. Вопросительный знак делает этот
                                    параметр необязательным.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-210.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И здесь мы должны решить, откуда мы берем эти отношения? Это могут быть
                                    отношения, равные отношениям или это отношения в текущем $this или, альтернативно,
                                    пустой массив.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-211.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, если вы не знаете этот оператор, он примет левый аргумент, если
                                    левый аргумент равен null или пустой, он примет второй аргумент. Мы используем
                                    отношения, если передан параметр. Если это не так, то попробуйте получить поле под
                                    названием relations, определенное внутри класса, в котором находится этото трейт.
                                </p>
                                <p class="card-text">Обратите внимание, что мы не ожидаем появления этого поля в трейте. Его
                                    необходимо добавить в класс. Где бы мы ни использовали этот обмен, в нашем случае это
                                    был бы контроллер событий или, альтернативно, пустой массив, который при использовании
                                    для каждого цикла просто ничего не загружал бы, потому что это пустой массив.
                                </p>
                                <p class="card-text">Проверим, работает ли наш новый трейт. Для этого нужно ее использовать.
                                    Перейдите к контроллеру событий и используйте этот трейт. Введите ключевое слово use, а
                                    затем название трейта, которое может загружать отношения и убедитесь, что вы добавили
                                    импорт.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-212.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И теперь мы можем использовать наш трейт. Начнем с метода index,
                                    который мы уже использовали для загрузки некоторых отношений. При желании, мы можем
                                    избавиться от этого фрагмента кода, потому что теперь он находится внутри сделки.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-213.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь давайте поднимем список отношений наверх.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-214.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">И теперь, когда мы генерируем запрос, мы можем выполнить эту загрузку
                                    отношений, потому что теперь у нас есть метод, добавленный в текущий класс. Вот так
                                    работают трейты. И мы можем передать ему экземпляр запроса события.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-215.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь мы можем сделать еще одну вещь в файле нашего трейта. У нас есть
                                    аргумент с возможностью обнуления, но давайте также добавим значение по умолчанию,
                                    потому что в противном случае, даже если этот аргумент имеет значение null, вы должны
                                    указать его. Мы инициализируем его с помощью null таким образом.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-216.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Посмотрим на функцию index в файле EventController
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-217.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Нам не нужно ничего передавать здесь, но поскольку у нас есть этот
                                    массив отношений, давайте передадим его в качестве второго аргумента.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-218.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь давайте отправим запрос повторно, чтобы мы могли увидеть, что
                                    загружены участники. Если попробовать загрузить пользователя, он также загружается, и
                                    участники указывают пользователя.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-219.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Но если мы хотели бы повторно использовать определение этих отношений в
                                    каждом действии, чтобы нам не приходилось устанавливать этот массив в каждом отдельном
                                    действии, мы можем добавить его в качестве поля. Таким образом, это были бы частные
                                    отношения, которые были бы инициализированы с помощью этого массива. .Это будет частный
                                    массив (доступно только для PHP восьмой версии и выше).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-220.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, теперь нам также не нужно передавать это поле отношений методу
                                    load relationships, потому что этот признак автоматически проверяет наличие этого поля.
                                    Если вы хотите указать параметр relations, он автоматически будет использовать значение
                                    поля. Таким образом, преимущества в том, что вы можете использовать некоторые настройки
                                    по умолчанию для всех действий в controller. Но если вам нужно настроить одно действие,
                                    вы легко можете сделать это.
                                </p>
                                <p class="card-text">Теперь единственное, что вам нужно сделать, это вызвать этот метод в
                                    каждом отдельном месте, где вы хотите дополнительно загрузить некоторые отношения,
                                    например в хранилище. Нам нужно обернуть необходимое событие с помощью load
                                    relationships.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-221.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-222.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Вместо загрузки случайных связей мы можем просто выполнить это событие
                                    load relationships, или вы можете пропустить использование привязки модели маршрута и
                                    вместо этого вы можете использовать событие, метод find или fail и затем обернуть это
                                    отношениями загрузки.
                                </p>
                                <p class="card-text">Внутри метода обновления также обернем событие нашим методом.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-223.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Метод Destroy в этом не нуждается, потому что мы избавляемся от
                                    события.
                                </p>
                                <p class="card-text">Итак, теперь этот параметр include будет работать практически с каждой
                                    отдельной конечной точкой внутри этого контроллера. Вариант решения, который мы
                                    рассмотрели - необязателен, это просто способ решения тех ситуаций, когда, возможно,
                                    нужно загрузить некоторые дополнительные отношения.
                                </p>
                            </div>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION -  Загрузка отношений с посетителями-->
                <div class="">
                    <div class="rounded-3" id="uploading_with_visitors">

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Загрузка отношений с посетителями</h4>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Продолжаем работу</h4>



                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text">Мы не добавили эту функцию, которую мы только что создали, к нашему
                                    другому контроллеру. Сейчас разберем, какие изменения необходимо внести.
                                </p>
                                <p class="card-text">Добавляем функцию к другому контроллеру самостоятельно.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-224.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, вы уже можете видеть, что одного участника можно просмотреть с
                                    помощью этой необязательной загрузки отношений, что означает, что изменения уже были
                                    внесены. Прежде всего, необходимо импортировать этот признак внутри контроллера. А
                                    затем, как обычно, мы должны вызвать load relationships в запросе. Мы получаем
                                    участников с мероприятия.
                                </p>
                                <p class="card-text">В файле CanLoadRelationships.php добавляем класс HasMany(потому что он
                                    есть у Посетителей). Итак, мы фактически должны добавить этот класс к этим отношениям
                                    загрузки как другой поддерживаемый тип и как другой возвращаемый тип. В противном случае
                                    мы получим сообщение об ошибке, а также обязательно импортируем этот класс в трейт.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-225.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл CanLoadRelationships.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Вот как это выглядит внутри метода store (мы загружаем взаимосвязь уже
                                    созданной модели). И метод show. Мы также обертываем модель, полученную с помощью
                                    привязки модели маршрута, отношениями загрузки метод.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-226.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-227.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">При удалении не нужно ничего загружать.
                                </p>
                                <p class="card-text">Кроме того, здесь у нас есть поле, определенное только для
                                    пользователя. Это единственная связь с участником. Вы также можете загрузить событие, но
                                    это может привести к некоторому вложению отношений, потому что вы уже загружаете
                                    участников конкретного события. Вы можете разрешить выборку события на основе участника.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-228.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Вы можете попробовать написать это самостоятельно.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION -  Настройка аутентификации с помощью -->
                 <div class="">
                    <div class="rounded-3" id="setting_up_sanctum_authentication">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Настройка
                                аутентификации</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Настройка
                                        аутентификации с помощью Sanctum</h4>
                                    <p>Пришло время внедрить аутентификацию в наш проект, вы могли заметить, что Laravel уже
                                        заранее создает модель пользователя, так что это будет легко. Аутентификация при
                                        работе с API не много отличается от обычной. Сейчас мы рассмотрим такой инструмент
                                        как Laravel Sanctum. Так как мы работаем с API удобнее всего будет использовать
                                        аутентификацию на основе токенов.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <h4 class="card-title pb-3">Laravel Sanctum</h4>



                                <!-- *TODO - Фото-карточка кода -->

                                <p class="card-text"> Сперва нам нужно проверить установлен ли в нашем проекте sanctum. Для
                                    этого нам нужно зайти в файл composer.json, который лежит в корне проекта и если внутри
                                    пункта require присутствует sanctum то все хорошо.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-229.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл composer.json</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">
                                    Если нет, то выполните следующие команды в консоле:
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-230.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-231.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-232.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Проверем модель пользователя, она должен использовать трейт
                                    HasApiTokens, в противном случае нужно дописать.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-233.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл User.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Это означает, что теперь мы можем генерировать токены для
                                    пользователей. Нам необходимо создать новый api контроллер, который будет отвечать за
                                    вход и выход пользователя, назовем его AuthController. Откроем и удалим все заранее
                                    написанные действия, они нам не понадобятся, напишем два новых, login и logout.
                                </p>

                                <div class="pb-3">
                                    <img src="/images/block-234.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь реализуем их, в функции login вызываем метод validate, нам нужно
                                    проверить логин и пароль пользователя, которые он нам передает.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-235.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь мы можем найти пользователя которого запрашивает наш посетитель,
                                    создадим переменную user и вызовем в ней метод where модели User, передадим методу то
                                    что мы ищем, так же получим первый элемент из найденных вариантов.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-236.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Это будет означать, что нужно найти пользователя emal которого
                                    совпадает с emal из запроса. Теперь стоит проверить существует ли данный пользователь в
                                    принципе, создаем условный оператор, условием которого будет инвертированная переменная
                                    $user, если наша переменная пуста, то выдаем ошибку валидации.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-237.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Следующим шагом будет проверка совпадают ли пароли, пароли перед
                                    попаданием в базу данных не хранятся в виде обычного текста, они всегда хешируются это
                                    сделано из соображений безопасности. Расшифровать и зашифровать данные можно с помощью
                                    класса Hash. Снова создаем условный оператор и записываем в условие метод check класса
                                    Hash, не забудьте его импортировать. Передаем два параметра в метод, которые нам нужно
                                    сравнить
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-238.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">В случае если эти два значения не совпадают, то метод вернет нам false.
                                    В таком случае снова выдаем ошибку. Обратите внимание что выдаем мы ее снова в поле
                                    email, так как иначе будет возможность догадаться зарегистрирован ли пользователь с этим
                                    email у нас.
                                </p>
                                <p class="card-text">После того как мы убедились, что такой пользователь существует нам
                                    необходимо сгенерировать токен, для этого создадим переменную token и вызовем метод
                                    CreateToken нашего объекта $user, дадим имя нашему токену. Так же используем метод
                                    plainTextToken, с помощью него мы вернем наш токен строкой в переменную.
                                </p>
                                <p class="card-text">Теперь у нас есть токен пользователя, который храниться в базе данных.
                                    Функция будет возвращать сообщение с нашим токеном, так как он нам пригодиться для
                                    авторизации.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-239.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь нам нужно прописать в маршрутах вызов нашего контроллера,
                                    используем метод post.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-240.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл api.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Убедитесь, что все классы импортированы. Теперь проверим работает ли
                                    наша авторизация, открываем postman и вписываем наш запрос, прописываем URL. Не забудьте
                                    установить заголовок accept в header. Теперь нам выдаст ошибку, которую мы и ждали, ведь
                                    поля для заполнения пусты. Напишем в body наш запрос, копируем email одного из
                                    пользователей в нашей базе данных. И тут у нас может возникнуть вопрос как же написать
                                    пароль. На самом деле все просто, когда мы создаем фабрики моделей Laravel всегда
                                    вписывает один и тот же пароль - password. Вписываем его вторым параметром.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-241.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Отлично, мы получили в ответ только что сгенерированный токен, можем
                                    перейти к таблице токенов в базе данных и посмотреть на новую запись там.
                                </p>
                            </div>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION - Защита маршрутов -->
                <div class="">
                    <div class="rounded-3" id="route_protection">

                        <!-- *SECTION - Блок-модуль с заданием-->
                        <div class="col mb-4 py-4">
                            <!-- *TODO - Фото-карточка кода -->

                            <p class="card-text"> Теперь когда мы поняли как войти в систему нам нужно защитить маршруты от
                                нежеланных посетителей, то есть что-бы некоторые запросы обрабатывались только у
                                авторизованных пользователей.
                            </p>
                            <p class="card-text"> Найдем в файле api.php первое определение маршрута, на его примере мы
                                можем увидеть как защищаются наши пути
                            </p>

                            <div class="pb-3">
                                <img src="/images/block-242.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл api.php</strong></p>
                                </div>
                            </div>

                            <p class="card-text">
                                Весь секрет в использование метода middleware. Можно также вызвать этот метод на всех
                                маршрутах, но тогда все запросы связанные с этим маршрутом будут требовать аутентификации, в
                                нашем случае такое не подойдет, так как запросы index и show не требуют ее по нашей задумке,
                                по этому будет вызывать его внутри контроллера, в функции construct.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-243.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">
                                Метод except не позволит применить middleware в функции, которые в него ввели. Также при
                                создании новых мероприятий нам необходимо отмечать кто их владелец. Для этого нужно изменить
                                нашу заглушку в методе validate, просто получим id из request.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-244.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">
                                Что ж, проверим работает или нет, для начала нам нужно выполнить вход и получить токен,
                                ранее мы это сделали, теперь нам нужно вставить его в выделенное под него поле во вкладке
                                авторизации, для этого в типе аутентификации выберите Bearer token.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-245.png" class="img-fluid" alt="...">
                            </div>

                        </div>
                    </div>
                </div>

                 <!-- *!SECTION -  Автоматическое добавление токена в запросы Postman-->
                 <div class="">
                    <div class="rounded-3" id="automatic_token_addition">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Автоматическое добавление токена в запросы Postman</h1>
                        </div>



                        <!-- *SECTION - Блок-модуль с заданием-->
                        <div class="col mb-4 py-4">
                            <!-- *TODO - Фото-карточка кода -->

                            <p class="card-text">И это то, как на самом деле получить токен после того, как вы войдете во
                                все остальные запросы.
                            </p>
                            <p class="card-text"> Поэтому вместо входа в систему сначала отправьте этот запрос на вход,
                                скопируйте токен и вставьте его во вкладку авторизации без значения.
                            </p>
                            <p class="card-text"> ПСейчас разберем как сделать так, чтобы токен автоматически вставлялся в
                                каждый другой запрос. Первый шаг - вам нужно будет перейти на вкладку тестов, которая
                                поддерживает добавление JavaScript, и там придется написать короткий фрагмент на JavaScript,
                                чтобы получить токен из ответа.
                            </p>

                            <div class="pb-3">
                                <img src="/images/block-246.png" class="img-fluid" alt="...">
                            </div>

                            <p class="card-text">
                                Это можно сделать, установив переменную Json и используя синтаксический анализ JavaScript. И
                                передав специальную переменную, называемую телом ответа, необходимо передать пару других
                                примеров.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-247.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Мы разбираем вкладку тестов, но это также можно использовать для некоторой автоматизации.
                                Теперь, когда у нас есть тело ответа, мы должны установить переменную окружения. Найдем ее в
                                фрагментах. Нам нужна переменная окружения(Set an environment variable).
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-248.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                После клика на необходимую переменную, код автоматически добавится к нашему коду.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-249.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Теперь нам нужно установить переменный ключ. Пусть это будет просто токен в верхнем регистре
                                и значение.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-250.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Значение - json.token.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-251.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Дело в том, что эти тесты будут запускаться после каждой отправки запроса, что означает, что
                                мы должны автоматически заполнять эту переменную при каждом запуске.
                            </p>
                            <p class="card-text">
                                Если посмотреть на локальные среды и значение токена. Это точно такой же токен, как тот,
                                который мы только что получили.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-252.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Рассмотрим использование этого токена. Для этого перейдите к токену предъявителя авторизации
                                из списка и просто используйте переменную TOKEN.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-253.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Теперь вы можете отправить этот запрос, и вы будете автоматически аутентифицированы.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-254.png" class="img-fluid" alt="...">
                            </div>
                            <p class="card-text">
                                Не забудьте сохранить изменения в тех запросах, которые требуют аутентификации, потому что,
                                как только вы используете переменную токена в качестве токена-носителя в каждом запросе, вы
                                можете просто пройти аутентификацию, а затем продолжить тестирование любых запросов, которые
                                вам нужны, без необходимости копировать токен и вставлять его вручную каждый раз. Это
                                огромная экономия времени.
                            </p>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION - Отзыв токена и выход из системы -->
                <div class="">
                    <div class="rounded-3" id="token_withdrawal_and_exit">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Отзыв токена и выход из системы</h1>
                        </div>



                        <!-- *SECTION - Блок-модуль с заданием-->
                        <div class="col mb-4 py-4">
                            <!-- *TODO - Фото-карточка кода -->

                            <p class="card-text">Помимо создания токена нам так-же приходиться его удалять, когда
                                пользователь выходит из системы. Для того что-бы пользователь вышел из системы нам нужно
                                удалить его токен из базы данных, для этого перейдем в AuthController к нашей функции
                                logout. Для удаления токенов конкретного пользователя достаточно просто вызвать методы
                                tokens, который выберет все токены пользователя и метод delete их удалит.
                            </p>

                            <div class="pb-3">
                                <img src="/images/block-255.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                </div>
                            </div>


                            <p class="card-text">А вернем мы простое сообщение о том, что токены удалены
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-256.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл AuthController.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Не забудьте в api.php прописать маршрут и использовать метод middleware
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-257.png" class="img-fluid" alt="...">
                            </div>

                            <p class="card-text">Из соображений безопасности стоит ограничивать время действия токена, в
                                Laravel это сделать легко, перейдем в файл sanctum.php в директории config и найдем строчку
                                expiration значения указывается в минутах.
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-258.png" class="img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-muted"><strong>файл sanctum.php</strong></p>
                                </div>
                            </div>
                            <p class="card-text">Однако все просроченные токены не удаляются из  базы данных, для этого предусмотрена специальная команда
                            </p>
                            <div class="pb-3">
                                <img src="/images/block-259.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Авторизация Gates(шлюзы) -->
                 <div class="">
                    <div class="rounded-3" id="gates">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Авторизация</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Авторизация Gates(шлюзы)</h4>
                                    <p class="pb-3">Часто происходит так, что одного уровня регистрации недостаточно,
                                        например как в нашем случае, каждый может создать мероприятие, но не каждый может
                                        его редактировать и удалять, в таком случае нам стоит воспользоваться шлюзами или
                                        стратегиями. В данном уроке мы разберем только шлюзы.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Рядом с папкой Models мы можем обнаружить, директорию Providers, внутри
                                    которой нам нужен файл AuthServiceProvider.php
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-260.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthServiceProvider.php</strong></p>
                                    </div>
                                </div>

                                <p class="card-text">Внутри функции boot вызываем класс Gate, не забываем его импортировать,
                                    а также его метод define в которую передаем название нашего шлюза и функцию вторым
                                    параметром. В качестве параметров функции нам нужно передать пользователя и модель,
                                    которая нам нужна, в нашем случае Event, строго в таком порядке. Теперь пишем return и
                                    возвращаем сравнение id пользователя и владельца мероприятия.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-261.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthServiceProvider.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">После написания шлюза нам нужно убедиться, что он будет вызываться пед
                                    исполнением контроллера, для этого нам нужно использовать функцию construct, напишем ее
                                    перед функцией index.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-262.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Нам также нужно его вызвать, переходим к нашему контроллеру update. В
                                    начале контроллера вызываем следующий метод.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-263.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь при каждом исполнении кода в update у нас будет проверяться
                                    пользователь на права редактирования этого мероприятия. Также нам стоит сделать проверку
                                    прав пользователя на удаление других пользователей с своего мероприятия и удаление
                                    пользователей самих себя, для этого все делаем точно также, объявляем новый шлюз.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-264.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AuthServiceProvider.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы не обозначали функцию construct в Attendee, самое время это сделать, можно скопировать из предыдущего файла.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-265.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Вызываем шлюз в контроллере.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-266.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

                  <!-- *!SECTION - Авторизация с помощью Policies (политики) -->
                <div class="">
                    <div class="rounded-3" id="policies">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Авторизация</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Авторизация с помощью Policies (политики)</h4>
                                    <p class="pb-3">Политики несколько похожи на Контроллеры. Это классы, которые могут
                                        иметь свои методы, и это их главное отличие от шлюзов, в том, что шлюзы способны
                                        вызвать только вписанный в них код, что располагает их к более простым задачам, в то
                                        время как политики больше подходят для задач требующих более сложную логику. При
                                        создании политик Laravel способен автоматически соединить их и контролер.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Создадим файлы политики, предназначенные для мероприятий и посетителей.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-267.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-268.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Файлы можно найти рядом с директорией Models в директории Policies.
                                    Когда мы откроем файл мы можем заметить что все названия функций совпадают с функциями
                                    контроллера, а также все параметры уже заполнены нужными нам моделями, это благодаря
                                    тому что указали модель при создании. Теперь нам необходимо указать что для авторизации
                                    стоит использовать политики, перейдем в construct и добавим следующую строчку.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-269.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Это все что нам потребуется, теперь каждый метод политики будет
                                    исполняться прежде, чем контроллер. На данный момент все возможности для
                                    незарегистрированного пользователя закрыты, чтобы открыть ему нужные нам возможности
                                    нужно сделать ввод модели в функцию не обязательным и вернуть значение true.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-270.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventPolicy.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Повторим в следующей функции, отвечающей за вывод одного мероприятия.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-271.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventPolicy.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Далее функция отвечающая за создание, доступ к ней могут иметь только
                                    авторизированные пользователи, поэтому модель user мы делаем обязательной для ввода.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-272.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventPolicy.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Следующая функция отвечает за обновления, для этого нужно быть
                                    зарегистрированным и быть владельцем, строчку для return можно скопировать в шлюзе, ее
                                    логику мы уже прописывали.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-273.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventPolicy.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Ранее мы использовали authorize в функции update, его нужно
                                    закомментировать раскомментировать, так как шлюз нам больше не понадобиться. Следующие
                                    функции мы на данный момент пропустим и поговорим о них чуть позже. Теперь немного
                                    изменим construct в контроллере посетителей.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-274.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Перейдем к файлу AttendeePolicy.php и проделаем то же самое, что и с мероприятиями.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-275.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-276.png" class="img-fluid" alt="...">
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-277.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeePolicy.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Пропустим функцию update, и перейдем к delete, мы снова прописали все заранее в шлюзах, по этому копируем и вставляем.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-278.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeePolicy.php</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION -  Ручная авторизация Policies (Политик)-->
                 <div class="">
                    <div class="rounded-3" id="manual_authorization_policies">

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Ручная авторизация Policies (Политик)</h4>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Политики это не только ресурс контроллера.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-279.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Здесь мы можем заметить метод cannot, который запрещает обновлять
                                    какие-то значения, если пользователь авторизирован (данные авторизации находятся в
                                    $post), также существует аналогичный метод can(), который является инвертированным
                                    cannot, эти методы бывает очень удобно использовать на стадии отладки.
                                </p>
                            </div>
                        </div>
                    </div>
                 </div>

                <!-- *!SECTION -  Напоминание о событиях-->
                <div class="">
                    <div class="rounded-3" id="event_reminder">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Напоминание о событие</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Напоминание о событиях</h4>
                                    <p class="card-text">В следующих нескольких уроках мы рассмотрим как создать небольшую
                                        систему, которая будет напоминать пользователям о событие на которое они записались
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Начнем мы с создания наших собственных команд для терминала. Откроем
                                    терминал и введем следующую команду.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-280.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">SendEventReminders - это название для нашей команды. Созданный файл
                                    будет находиться по пути App\Console\ . Каждая команда это класс, расширяющий базовый
                                    класс с командами Laravel. Внутри файла мы можем увидеть переменную signature, которая
                                    по сути является именем команды и прописывается сразу после php artisan при вызове.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-281.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Если внутри переменной у вас такая же строка, то изменим ее.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-282.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Ниже мы также увидим переменную description, которая включает в себя
                                    описание команды и будет выведено при вызове php artisan.
                                </p>
                                <p class="card-text">Перейдем к самому главному, функция handle, именно она будет содержать
                                    всю логику. Для начала давайте просто выведем что либо при вызове нашей команды.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-283.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Попробуем вызвать нашу команду в терминале.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-284.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>консоль</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Отлично!
                                </p>
                                <p class="card-text">Теперь для рассылки уведомлений нам нужно получить список всех
                                    мероприятий, которые пройдут, допустим через 24 часа. Обратимся к модели Event с ее
                                    методом with, метод соберет так же вместе с мероприятиями всех его посетителями, далее
                                    установим фильтр, который найдет события, начинающиеся через 24 часа.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-285.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь вернем количество найденных событий для того чтобы быть уверенными в правильности написанного.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-286.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-287.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Только убедитесь, что у вас присутствуют записи в таблице, которые соответствуют фильтру.
                                </p>
                                <p class="card-text">Теперь нам нужно выбрать всех пользователей, которые отправляются на эти мероприятия.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-288.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл SendEventReminders.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Вызываем метод each, нашего объекта events и запишем в него стрелочную функцию которая переберет каждее событие и снова вызовет другую стрелочную функцию, которая уже будет выбирать посетителей и выведет информацию, что каждый пользователь уведомлен о предстоящем событие. Проверяем, убедитесь то что у вас в базе данных присутствуют пользователи которые идут на ближайшее событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-289.png" class="img-fluid" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- *!SECTION - Напоминание о событиях - планирование задач -->
                 <div class="">
                    <div class="rounded-3" id="task_planning">
                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Напоминание о событиях - планирование задач</h4>
                                    <p class="card-text">Часто бывает такое, что необходимо запланировать выполнение какой
                                        либо задачи, например ежедневное удаление токенов или, в нашем случае, уведомление
                                        пользователей за 24 часа до мероприятия.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Для этого нам нужно найти файл Kernel.php, он находиться в папке
                                    Console. Внутри вы можете увидеть функцию schedule, она нам и понадобиться.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-290.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Kernel.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Мы назначали ежедневное повторение нашей команды, но в таком случае нам
                                    придется слишком долго ждать для ее запуска, снизим время ожидания до минуты.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-291.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл Kernel.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь мы запустим отдельный процесс, похожий на serve, однако этот
                                    будет отвечать за исполнение назначенных по времени команд.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-292.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Однако на сколько хорошо это не звучало бы, на боевом сервере это
                                    работать не будет, для этого нужно будет использовать Cron, который будет исполнять то
                                    же самое, но его мы в рамках этого курса затрагивать не будем.
                                </p>
                            </div>
                        </div>
                    </div>
                 </div>

                 <!-- *!SECTION - Напоминание о событиях - уведомление и отправка по электронной почте -->
                <div class="">
                    <div class="rounded-3" id="notification_and_sending_by_email">
                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Напоминание о событиях - уведомление и отправка по
                                        электронной почте
                                    </h4>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Уведомлять пользователей мы будем по электронной почте, которую они нам
                                    указывают при регистрации. Для начала нам нужно создать класс нашего уведомления, это
                                    можно с помощью команды в терминале.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-293.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">Созданный файл находиться в папке app\notification, открываем.
                                    Обозначим в функции construct модель Event для дальнейшего конструирования письма.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-294.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл EventReminderNotification.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Далее перейдем к методу toMail.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-295.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл EventReminderNotification.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Данный блок предназначен для формирования текста письма, отредактируем
                                    его немного под себя, line отвечает за обычный текст, а action за ссылки в письме.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-296.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл EventReminderNotification.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Обратите внимание на action, в нашем случае это бесполезная строка, так
                                    как мы работаем с REST API, и прикрепить ссылку на какую либо страницу нашего проекта не
                                    можем, но сейчас для наглядности мы просто вызовем одну из функций нашего API.
                                </p>
                                <p class="card-text">У нас может храниться некоторая дополнительная информация, возможно,
                                    для разных видов уведомлений, например, если вы решите также отображать их внутри
                                    колодца, сохраните их в базе данных, чтобы отображать их на веб-сайте.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-297.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл EventReminderNotification.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь, когда мы определили это мероприятие, мы действительно готовы
                                    его провести.
                                </p>
                                <p class="card-text">Внутри консольного ядра мы запускаем наше приложение, отправляем
                                    напоминания о событиях, ежедневно выполняем команды.
                                </p>
                                <p class="card-text">Но сначала нам нужно изменить эту команду, потому что она отвечает за
                                    уведомление пользователей. Мы создали класс уведомлений с каналами доставки. На данном
                                    этапе это только почта, но благодаря этой информации она готова к хранению в базе
                                    данных, затем можно легко извлечь их из базы данных.
                                </p>
                                <p class="card-text">НСейчас команда не уведомляет пользователя. У нас есть участник,
                                    который имеет отношение к пользователю, у которого есть электронное письмо, и он
                                    действительно посетит это мероприятие, по отношению к этому пользователю можно вызвать
                                    метод notify()
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-298.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл SendEventReminders.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь нам нужно создать новый экземпляр класса notification, в нашем
                                    случае это уведомление с напоминанием о событии.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-299.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл SendEventReminders.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">И у этого есть один параметр - событие.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-300.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл SendEventReminders.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь можно проверить, работает ли эта команда. Для тестирования
                                    достаточно выполнить эту команду вручную, но если вам необходимо, вы можете изменить
                                    ядро консоли, чтобы запускать эту команду каждую минуту, чтобы вы могли видеть, что она
                                    отправляется автоматически. Но мы также можем протестировать это, просто запустив
                                    команду “php artisan app:send-event-reminders”.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- *!SECTION - Напоминание о событиях - очередях -->
                <div class="">
                    <div class="rounded-3" id="quesues">


                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Напоминание о событиях - очередях</h4>
                                    <p class="pb-3">Теперь поговорим об очередях в Laravel. Очереди позволяют вам отложить
                                        выполнение некоторых трудоемких задач в фоновом режиме, и это улучшит
                                        производительность вашего приложения и удобство работы с пользователем.
                                    </p>
                                    <p class="pb-3">Хорошим примером использования очередей является отправка электронных
                                        писем, поэтому это не обязательно должно быть связано с нашим текущим проектом. Но
                                        если у вас есть какой-либо традиционный веб-проект в Laravel, и вы попытаетесь
                                        отправить электронное письмо во время запроса пользователя, это может занять
                                        некоторое время.
                                    </p>
                                    <p class="pb-3">Нам не нужно дожидаться отправки электронного письма, поэтому можно дать
                                        инструкции для фреймворка Laravel, чтобы он выполнил это действие позже, а затем
                                        отдельный процесс, запущенный на сервере. Это называется queue worker, который
                                        просто заберет задачи, которые хранятся в разных хранилищах. Это может быть Redis,
                                        база данных или любые поставщики очередей в облаке, такие как Amazon, SQS. Это
                                        делает ваш пользовательский интерфейс быстрым и понятным.
                                    </p>
                                    <p class="pb-3">Подробнее с теорией можно ознакомится путем чтения официальной
                                        документации Laravel, а мы сейчас приведем какой-нибудь простой пример, чтобы сразу
                                        увидеть преимущества очередей.
                                    </p>
                                    <p class="pb-3">Для каждой очереди должен быть настроен драйвер (где хранится информация
                                        о том, что нужно сделать позже). Когда приложение будет фактически запущено,
                                        обслуживая реальных клиентов, вы будете использовать либо базу данных хранилища
                                        значений ключей Redis или некоторые облачные провайдеры, возможно, Amazon, SQS или
                                        какие-то другие.
                                    </p>
                                    <p class="pb-3">Теперь локально, чтобы просто посмотреть, как работают очереди, мы можем
                                        использовать базу данных. Вы можете сохранить данные на потом внутри базы данных.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Итак, нам нужно проделать некоторую работу, чтобы начать, для начала
                                    необходимо сгенерировать отдельную таблицу базы данных. (чтобы сделать это, давайте
                                    запустим таблицу очередей миграции PHP artisan внутри терминала, это создаст новую
                                    миграцию, а затем PHP artisan migrate создаст эту таблицу).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-301.png" class="img-fluid" alt="...">
                                </div>

                                <p class="card-text">Имейте в виду, что мы делаем это только для того, чтобы нам было проще
                                    просто посмотреть, как работают очереди. Используя Redis, который более популярен для
                                    управления очередями, требует настроить расширение Redis сначала для PHP, а затем
                                    запуска сервера Redis с помощью Docker (потенциально это может вызвать больше проблем,
                                    чем того стоит).
                                </p>
                                <p class="card-text">После выполнения этих двух команд в консоли нам нужно сообщить Laravel,
                                    что это за соединение. Очереди настраиваются внутри файла конфигурации PHP - queue.
                                    Настройка по умолчанию - sync, которая в основном запускала бы все синхронно без
                                    фактического использования очереди.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-302.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл queue.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Итак, есть определенные в файле подключения. Есть база данных, которая
                                    будет просто использовать вашу базу данных, будь то MySQL или Postgres. Есть Beanstalk,
                                    другое популярное решение Amazon, SQS, Redis и так далее.
                                </p>
                                <p class="card-text">Они предварительно настроены там, но вы, очевидно, можете использовать
                                    все, что вам нужно.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-303.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл queue.php</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Изменим настройку внутри файла .env, давайте воспользуемся базой
                                    данных.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-304.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл .env</strong></p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь есть множество способов перенести некоторые трудоемкие задачи в
                                    фоновый режим. Например, можно создавать свои пользовательские классы заданий и
                                    отправлять их вручную, но самый простой способ начать работу с очередями это добавить
                                    определенный интерфейс,например, для уведомлений, потому что это наш текущий вариант
                                    использования.
                                </p>
                                <p class="card-text">Изначально в файле уведомлений предопределены многие свойства, поэтому
                                    нам нужно просто добавить реализацию запуска очереди. Так вы сообщаете Laravel, что эта
                                    логика уведомлений должна выполняться в фоновом режиме, а не во время запроса.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-305.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>Файл EventReminderNotification.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь, каждый раз, когда это выполняется, отправляется уведомление.
                                    Оно должно быть запущено в очереди.
                                </p>
                                <p class="card-text">Поскольку мы изменили это уведомление, которое запускается внутри этой
                                    команды, вернемся к терминалу и запустим приложение PHP Artisan для установки
                                    напоминаний о событиях. После запуска мы можем видеть, что команда была выполнена
                                    быстро.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-306.png" class="img-fluid" alt="...">
                                </div>
                                <p class="card-text">На самом деле потребовалось некоторое время, чтобы запустить и
                                    отправить все эти электронные письма, потому, что теперь все было помещено в очередь.
                                    Если мы взглянем на почтовый идентификатор, мы увидим, что в почтовом ящике нет писем.
                                </p>
                                <p class="card-text">Получается, несмотря на быстрое выполнение команды, на самом деле
                                    никаких новых писем прямо сейчас отправлено не было.
                                </p>
                                <p class="card-text">Это означает, что у нас есть что-то, ожидающее в очереди, и поскольку у
                                    нас есть драйвер в качестве базы данных, элементы, которые нужно запустить, на самом
                                    деле ожидают в базе данных.
                                </p>
                                <p class="card-text">Таким образом, это означает, что мы должны запустить некоторую
                                    дополнительную команду, которая должна постоянно работать и извлекать эти элементы из
                                    очереди и выполнять их по мере поступления в эти элементы. команда - php artisan
                                    queue:work.
                                </p>
                                <p class="card-text">Теперь важно, чтобы эта команда выполнялась постоянно рядом с вашим
                                    фактическим веб-сервером, независимо от того, какой сервер вы используете, будь то Nginx
                                    или Apache, эта команда должна выполняться и вам нужно убедиться, что она выполняется
                                    постоянно.
                                </p>
                                <p class="card-text">Если ее запустить, то мы увидим, что в нем появилось несколько новых
                                    задач, эти задачи были запущены и выполнены. Также можно посмотреть сколько времени
                                    заняло каждое из них.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                 <!-- *!SECTION - Напоминание о событиях - очередях -->
                <div class="">
                    <div class="rounded-3" id="api_regulation">

                        <!-- *TODO - Заголовок главы -->
                        <div class="">
                            <h1 class="display-5 fw-bold">Регулирование API</h1>
                        </div>

                        <!-- *TODO -  Подзаголовок главы -->
                        <div class="row row-cols-1 py-5">
                            <div class="col d-flex align-items-start">
                                <div class="image bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                                    <img src="/images/grid.png" alt="">
                                </div>
                                <div>
                                    <h4 class="fw-bold mb-0 pb-3">Регулирование API</h4>
                                    <p class="pb-3">Одна из важных тем, которую нельзя упустить, когда речь заходит об API,
                                        - это ограничение скорости. Ограничение скорости - это, по сути, важный инструмент
                                        для защиты ваших API от чрезмерного использования или от любого потенциального
                                        злоупотребления. И, по сути, задача использования ограничения скорости заключается в
                                        том, чтобы просто гарантировать, что ваш API останется доступным и будет просто
                                        хорошо работать.
                                    </p>
                                    <p class="pb-3">Теперь узнаем, как установить и конфигурировать ограничение скорости.
                                        Ограничитель скорости использует конфигурацию кэша по умолчанию. Это можно изменить,
                                        указав другой параметр внутри файла конфигурации кэша под названием limiter (поэтому
                                        рекомендуется использовать Redis для кэширования, сохранения сеансов, а также для
                                        ограничения скорости).
                                    </p>
                                    <p class="pb-3">Ограничитель скорости-это в основном класс, который имеет некоторые
                                        возможности, но большую часть времени он не используется таким образом. Чаще всего
                                        есть только промежуточное программное обеспечение, которое вы будете применять к
                                        своим контроллерам (вы просто сообщаете своим контроллерам, сколько попыток может
                                        быть предпринято за сколько времени до получения доступа).
                                        Итак, давайте добавим некоторые ограничения скорости к нашим контроллерам.
                                    </p>
                                </div>
                            </div>


                            <!-- *SECTION - Блок-модуль с заданием-->
                            <div class="col mb-4 py-4">
                                <!-- *TODO - Фото-карточка кода -->
                                <p class="card-text">Но прежде чем мы это сделаем, давайте откроем контроллер участника,
                                    поскольку здесь нужно исправить то, что мы добавляем участника с идентификатором
                                    пользователя 1( у нас есть пользователь, поэтому мы можем получить идентификатор
                                    пользователя из объекта запроса).
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-307.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>

                                <p class="card-text">Теперь также давайте избавимся от ненужной строки кода и вернемся к
                                    регулированию.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-308.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Регулирование может быть добавлено в том месте, где вы определяете
                                    маршруты, которым является файл API в папке routes. Можно применить его к некоторым
                                    конкретным действиям на контроллере, но также можно добавить промежуточное программное
                                    обеспечение внутри конструктора контроллера (мы уже делаем это для аутентификации,
                                    поэтому, я думаю, мы могли бы также добавить это регулирующее промежуточное программное
                                    обеспечение в контроллер участников и событий).
                                </p>
                                <p class="card-text">Давайте добавим регулирование к участникам в файле
                                    AttendeeController.php с помощью middleware(). Пишем вызов данного метода и его
                                    название.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-309.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Так же можно сразу настроить этот метод, указав, каков предел.
                                    Допустим, по умолчанию вы можете разрешить пользователям выполнять 60 запросов в течение
                                    одной минуты.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-310.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь этот вызов применил бы это регулирование к каждому отдельному
                                    действию, но, возможно, нам не следует устанавливать ограничение для действий, которые
                                    считывают данные. Регулирование лучше всего использовать для действий с интенсивной
                                    записью, выполняемых публично.
                                </p>
                                <p class="card-text">По сути, это устанавливает конечные точки, которые создают, обновляют
                                    или удаляют ресурсы. Поэтому следует применить регулирование для этих действий, особенно
                                    если они общедоступны, чтобы они не требовали аутентификации (бывают случаи, когда для
                                    создания или обновления чего-либо в API, необходимо пройти аутентификацию, тогда вы
                                    можете отслеживать вредоносных пользователей и, возможно, блокировать их в любом
                                    случае).
                                </p>
                                <p class="card-text">Давайте убедимся, что мы применяем это только к некоторым конкретным
                                    действиям. В случае с этим контроллером мы хотим применить это для сохранения и
                                    удаления.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-311.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь давайте сделаем то же самое внутри контроллера событий. Перейдем
                                    к конструктору и применим это промежуточное программное обеспечение. Но здесь у нас есть
                                    еще одно действие обновления. Давайте также применим это промежуточное программное
                                    обеспечение для мошеннических ссылок к действию обновления.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-312.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">Теперь вы также можете настроить это обобщенным способом, перейдя к
                                    маршрутизации.внутри файла RouteServiceProvider.php вы можете определить группу
                                    мошеннических ссылок. api - это просто название, которое я придумал, и оно конкретно
                                    определено в этом месте. Таким образом, у вас может быть больше групп, вы можете
                                    настраивать их. Но в этой группе указано, что ограничение составляет 60 запросов в
                                    минуту, и пользователь идентифицируется, если он вошел в систему по идентификатору
                                    пользователя, в противном случае по IP-адресу запроса.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-313.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл RouteServiceProvider.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">И тогда вместо того, чтобы указывать, сколько запросов может быть
                                    сделано в каждом отдельном контроллере, вы можете заменить это настройками API throttle.
                                </p>
                                <div class="pb-3">
                                    <img src="/images/block-314.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл AttendeeController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="pb-3">
                                    <img src="/images/block-315.png" class="img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-muted"><strong>файл EventController.php</strong>
                                        </p>
                                    </div>
                                </div>
                                <p class="card-text">
                                    Возвращаясь к файлу RouteServiceProvider.php можно настроить ограничения. Мы можем
                                    сначала проверить, вошел ли пользователь в систему, а затем установить для него больший
                                    лимит, например, 200 запросов в минуту. Если пользователь не прошел проверку
                                    подлинности, вы можете ограничить доступ пользователя, например, до 20 запросов.
                                </p>
                                <p class="card-text">
                                    По сути, у вас есть доступ ко всему через этот объект запроса. Таким образом, вы
                                    действительно можете создать здесь более сложные правила, используя операторы if и т.д.,
                                    чтобы просто вернуть фактический предел.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>


        </div>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<script src="./resources/js/event-handler.js"></script>


</html>
