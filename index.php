<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growing Wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Підключення шрифту Euclid Circular Semibold -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Euclid+Circular:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Лого зліва -->
            <a class="navbar-brand" href="#">GW</a>

            <!-- Кнопка для мобільного меню -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Меню -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto"> <!-- mx-auto для центрування меню -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Послуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                </ul>

                <!-- Особистий кабінет справа -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Особистий кабінет</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header-dark text-white py-5">
        <div class="container">
            <div class="header-content text-center">
                <h1>Growing Wallet</h1>
                <p class="slogan">Ваш надійний партнер у світі інвестицій</p>
                <p class="description">
                    Ми пропонуємо аналітику криптовалют, фондову аналітику, персональний супровід, навчання та ексклюзивні індикатори для успішного інвестування.
                </p>
            </div>
        </div>
    </header>

    <section class="stats-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Статистика компанії</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <h3>10,000+</h3>
                    <p>Клієнтів</p>
                </div>
                <div class="col-md-3">
                    <h3>$500M+</h3>
                    <p>Інвестицій</p>
                </div>
                <div class="col-md-3">
                    <h3>15%</h3>
                    <p>Середній дохід</p>
                </div>
                <div class="col-md-3">
                    <h3>40+</h3>
                    <p>Країн</p>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us py-5">
        <div class="container">
            <h2 class="text-center mb-4">Чому обирають нас</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://placehold.co/600x400" alt="Why Choose Us" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <!-- Професійна команда -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Професійна команда
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Наша команда складається з досвідчених фінансових аналітиків, які мають великий досвід у роботі з криптовалютами та фондовими ринками. Ми постійно вдосконалюємо свої навички, щоб забезпечити вам найкращі рішення.
                                </div>
                            </div>
                        </div>

                        <!-- Точні прогнози -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Точні прогнози
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Ми використовуємо сучасні технології та алгоритми для аналізу ринку, що дозволяє нам надавати точні прогнози. Наші прогнози допомагають клієнтам приймати обґрунтовані рішення.
                                </div>
                            </div>
                        </div>

                        <!-- Прозорість -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Прозорість
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Ми прагнемо до повної прозорості у всіх наших операціях. Ви завжди можете бути впевнені, що наші дії відповідають вашим інтересам.
                                </div>
                            </div>
                        </div>

                        <!-- Ексклюзивна інформація -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Ексклюзивна інформація
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Наші клієнти отримують доступ до ексклюзивної інформації, яка допомагає їм залишатися на крок попереду конкурентів. Ми надаємо аналітику, яку ви не знайдете в інших джерелах.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Відгуки наших клієнтів</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-card">
                        <div class="review-header">
                            <img src="https://placehold.co/80x80" alt="Client 1" class="review-avatar">
                            <div class="review-info">
                                <h5 class="review-name">Іван Петренко</h5>
                                <p class="review-date">12 листопада 2023</p>
                            </div>
                        </div>
                        <div class="review-body">
                            <p class="review-text">Дуже задоволений сервісом. Все швидко та якісно. Рекомендую всім, хто цікавиться інвестиціями.</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <div class="review-header">
                            <img src="https://placehold.co/80x80" alt="Client 2" class="review-avatar">
                            <div class="review-info">
                                <h5 class="review-name">Олена Сидорова</h5>
                                <p class="review-date">5 листопада 2023</p>
                            </div>
                        </div>
                        <div class="review-body">
                            <p class="review-text">Чудовий сервіс, рекомендую всім! Дуже професійний підхід та зрозумілі рекомендації.</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <div class="review-header">
                            <img src="https://placehold.co/80x80" alt="Client 3" class="review-avatar">
                            <div class="review-info">
                                <h5 class="review-name">Михайло Іванов</h5>
                                <p class="review-date">28 жовтня 2023</p>
                            </div>
                        </div>
                        <div class="review-body">
                            <p class="review-text">Професійний підхід, задоволений результатами. Дуже допомогли з інвестиціями.</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Наші партнери</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 1" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 2" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 3" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 4" class="img-fluid">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 5" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 6" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 7" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 8" class="img-fluid">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 9" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 10" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 11" class="img-fluid">
                </div>
                <div class="col-md-3 text-center">
                    <img src="https://placehold.co/150x100" alt="Partner 12" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Контакти</h5>
                    <p><a href="https://t.me/gw_support">Телеграм канал</a></p>
                    <p><a href="https://t.me/gw_bot">Телеграм бот</a></p>
                </div>
                <div class="col-md-4">
                    <h5>Сторінки сайта</h5>
                    <p><a href="#">Головна</a></p>
                    <p><a href="#">Послуги</a></p>
                    <p><a href="#">Блог</a></p>
                </div>
                <div class="col-md-4">
                    <h5>Про нас</h5>
                    <p>Ми - провідна компанія у сфері фінансової аналітики та інвестицій.</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>© 2023 Growing Wallet. Всі права захищені.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>