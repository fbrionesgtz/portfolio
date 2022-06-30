<?php include "./php/handleEmail.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Francisco Briones</title>
    <meta name="description" content="Portfolio Template for Developer"/>

    <link rel="stylesheet" href="css/style.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
            rel="stylesheet"
    />

</head>
<body>
<header class="header">
    <div class="header__content">
        <div class="header__logo-container">
            <div class="header__logo-img-cont">
                <img
                        src="assets/png/francisco_briones.png"
                        alt="Francisco Briones"
                        class="header__logo-img"
                />
            </div>
            <span class="header__logo-sub">Francisco Briones</span>
        </div>
        <div class="header__main">
            <ul class="header__links">
                <li class="header__link-wrapper">
                    <a href="index.php" class="header__link"> Home </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="index.php#about" class="header__link">About </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="index.php#projects" class="header__link">
                        Projects
                    </a>
                </li>
                <li class="header__link-wrapper">
                    <a href="index.php#contact" class="header__link"> Contact </a>
                </li>
            </ul>
            <div class="header__main-ham-menu-cont">
                <img
                        src="./assets/svg/ham-menu.svg"
                        alt="hamburger menu"
                        class="header__main-ham-menu"
                />
                <img
                        src="./assets/svg/ham-menu-close.svg"
                        alt="hamburger menu close"
                        class="header__main-ham-menu-close d-none"
                />
            </div>
        </div>
    </div>
    <div class="header__sm-menu">
        <div class="header__sm-menu-content">
            <ul class="header__sm-menu-links">
                <li class="header__sm-menu-link">
                    <a href="index.php"> Home </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="index.php#about"> About </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="index.php#projects"> Projects </a>
                </li>

                <li class="header__sm-menu-link">
                    <a href="index.php#contact"> Contact </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<section class="home-hero">
    <div class="home-hero__content">
        <h1 class="heading-primary">Hey, I'm Francisco Briones</h1>
        <div class="home-hero__info">
            <p class="text-primary">
                Full stack developer who is always up for a challenge, loves problem solving,
                and enjoys learning things on the go.
            </p>
        </div>
        <div class="home-hero__cta">
            <a href="./#projects" class="btn btn--bg">Projects</a>
        </div>
    </div>
    <div class="home-hero__socials">
        <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
                <img
                        src="./assets/png/linkedin-ico.png"
                        alt="icon"
                        class="home-hero__social-icon"
                />
            </a>
        </div>
        <div class="home-hero__social">
            <a href="#" class="home-hero__social-icon-link">
                <img
                        src="./assets/png/github-ico.png"
                        alt="icon"
                        class="home-hero__social-icon"
                />
            </a>
        </div>
    </div>
    <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
    </div>
</section>
<section id="about" class="about sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main">About Me</span>
            <span class="heading-sec__sub">
            Fun fact, I had curly hair when I was little
          </span>
        </h2>
        <div class="about__content">
            <div class="about__content-main">
                <h3 class="about__content-title">Get to know me!</h3>
                <div class="about__content-details">
                    <p class="about__content-details-para">
                        Hey! It's
                        <strong>Francisco Briones</strong>
                        and I'm a <strong> Full Stack Developer </strong> located in
                        Sherbrooke, Quebec.
                    </p>
                    <p class="about__content-details-para">
                        I'm a creative and progress focused developer who recently graduated
                        from the Computer Information Systems Program at Holland College. I adapt
                        to working environments with ease and possess strong skills in communication, and
                        teamwork.
                    </p>
                    <p class="about__content-details-para">
                        Hobbies: Football, Soccer, Music, Art.
                    </p>
                </div>
                <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr"
                >Contact</a>
            </div>
            <div class="about__content-skills">
                <h3 class="about__content-title">My Skills</h3>
                <div class="skills">
                    <div class="skills__skill">HTML</div>
                    <div class="skills__skill">CSS</div>
                    <div class="skills__skill">JavaScript</div>
                    <div class="skills__skill">React</div>
                    <div class="skills__skill">Next</div>
                    <div class="skills__skill">Java</div>
                    <div class="skills__skill">PHP</div>
                    <div class="skills__skill">C#</div>
                    <div class="skills__skill">Android</div>
                    <div class="skills__skill">Linux</div>
                    <div class="skills__skill">Figma</div>
                    <div class="skills__skill">Photoshop</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="projects" class="projects sec-pad">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg">
            <span class="heading-sec__main">Projects</span>
            <span class="heading-sec__sub">
            Take a look at some of my personal projects!
          </span>
        </h2>

        <div class="projects__content">
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                            src="./assets/jpeg/project-mockup-example.jpeg"
                            alt="Software Screenshot"
                            class="projects__row-img"
                            loading="lazy"
                    />
                    <img src="assets/gif/Bookify.gif"
                         alt="Bookify"
                         class="projects__row-gif"
                         loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Bookify</h3>
                    <p class="projects__row-content-desc">
                        This project lets users create an account
                        and read books. After an account is created, a user can
                        create collections where their books are stored. You can
                        read books that are in your collection and you can have
                        many collections to store books.
                        Bookify makes use of the Google Books API to bring users
                        a wide range of books.
                    </p>
                    <div class="made-with">
                        <div class="made-with__tech">PHP</div>
                        <div class="made-with__tech">CSS</div>
                        <div class="made-with__tech">MySQL</div>
                        <div class="made-with__tech">Bootstrap</div>
                    </div>
                    <div class="projects__row-content-actions">
                        <a
                                href="https://www.youtube.com/watch?v=WuLvK5GIcUM"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Demo</a>
                        <a
                                href="https://github.com/fbrionesgtz/bookify"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Code</a>
                    </div>

                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                            src="./assets/jpeg/project-mockup-example.jpeg"
                            alt="Software Screenshot"
                            class="projects__row-img"
                            loading="lazy"
                    />
                    <img
                            src="assets/gif/Dine-In.gif"
                            alt="Dine-In"
                            class="projects__row-gif"
                            loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Dine In</h3>
                    <p class="projects__row-content-desc">
                        This project allows the user to create an account to
                        then choose between a number of meals and add
                        them to their cart. It also allows them to
                        delete items from their cart and place an order.
                    </p>
                    <div class="made-with">
                        <div class="made-with__tech">React</div>
                        <div class="made-with__tech">Firebase</div>
                        <div class="made-with__tech">HTML</div>
                        <div class="made-with__tech">Bootstrap</div>
                        <div class="made-with__tech">CSS</div>
                    </div>
                    <div class="projects__row-content-actions">
                        <a
                                href="https://www.youtube.com/watch?v=-_slcxJixm8&t=15s&ab_channel=FranciscoBriones"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Demo</a>
                        <a
                                href="https://github.com/fbrionesgtz/Dine-in"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Code</a>
                    </div>
                </div>
            </div>
            <div class="projects__row">
                <div class="projects__row-img-cont">
                    <img
                            src="./assets/jpeg/project-mockup-example.jpeg"
                            alt="Software Screenshot"
                            class="projects__row-img"
                            loading="lazy"
                    />
                    <img
                            src="assets/gif/Expenses.gif"
                            alt="Expenses"
                            class="projects__row-gif"
                            loading="lazy"
                    />
                </div>
                <div class="projects__row-content">
                    <h3 class="projects__row-content-title">Expenses</h3>
                    <p class="projects__row-content-desc">
                        This project will help the user manage his/her expenses.
                        It will allow them to add, delete, and update their expenses.
                        The user will also have the ability to filter their expenses by
                        year and save them.
                    </p>
                    <div class="made-with">
                        <div class="made-with__tech">React</div>
                        <div class="made-with__tech">Firebase</div>
                        <div class="made-with__tech">HTML</div>
                        <div class="made-with__tech">Bootstrap</div>
                        <div class="made-with__tech">CSS</div>
                    </div>
                    <div class="projects__row-content-actions">
                        <a
                                href="https://www.youtube.com/watch?v=aFXPN910yiA&ab_channel=FranciscoBriones"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Demo</a>
                        <a
                                href="https://github.com/fbrionesgtz/Expenses"
                                class="btn btn--med btn--theme dynamicBgClr"
                                target="_blank"
                        >Code</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact sec-pad dynamicBg">
    <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
            <span class="heading-sec__main heading-sec__main--lt">Contact</span>
            <span class="heading-sec__sub heading-sec__sub--lt">
            Feel free to leave me a message at any time!
          </span>
        </h2>
        <div class="contact__form-container">
            <form class="contact__form">
                <div class="contact__form-field">
                    <label class="contact__form-label" for="name">Name</label>
                    <input
                            required
                            placeholder="Enter Your Name"
                            type="text"
                            class="contact__form-input"
                            name="name"
                            id="name"
                    />
                </div>
                <div class="contact__form-field">
                    <label class="contact__form-label" for="email">Email</label>
                    <input
                            required
                            placeholder="Enter Your Email"
                            type="text"
                            class="contact__form-input"
                            name="email"
                            id="email"
                    />
                </div>
                <div class="contact__form-field">
                    <label class="contact__form-label" for="message">Message</label>
                    <textarea
                            required
                            cols="30"
                            rows="10"
                            class="contact__form-input"
                            placeholder="Enter Your Message"
                            name="message"
                            id="message"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn--theme contact__btn">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="main-container">
        <div class="main-footer__upper">
            <div class="main-footer__row main-footer__row-1">
                <h2 class="heading heading-sm main-footer__heading-sm">
                    <span>Social</span>
                </h2>
                <div class="main-footer__social-cont">
                    <a target="_blank" rel="noreferrer" href="#">
                        <img
                                class="main-footer__icon"
                                src="./assets/png/linkedin-ico.png"
                                alt="icon"
                        />
                    </a>
                    <a target="_blank" rel="noreferrer" href="#">
                        <img
                                class="main-footer__icon"
                                src="./assets/png/github-ico.png"
                                alt="icon"
                        />
                    </a>
                </div>
            </div>
            <div class="main-footer__row main-footer__row-2">
                <h4 class="heading heading-sm text-lt">Francisco Briones</h4>
                <p class="main-footer__short-desc">
                    Full stack developer who is always up for a challenge, loves problem solving,
                    and enjoys learning things on the go.
                </p>
            </div>
        </div>

        <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
        <div class="main-footer__lower">
            &copy; Copyright 2021. Made by
            <a rel="noreferrer" target="_blank" href="https://rammaheshwari.com"
            >Ram Maheshwari</a
            >
        </div>
    </div>
</footer>

<script src="./index.js"></script>
</body>
</html>
