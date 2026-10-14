<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 <!-- Header Section -->
    <?php include './include/header.php'; ?>

    <h1>hht</h1>

    <!-- link for mysql section -->
     <a href="#mysql">jump to MYSQL Section</a>

    <!-- Aside + main section -->
    <div class="Aside-Main">
        <aside>
            <div class="myintro">
                <img src="/images/iwt5logo.png" alt="Dayanand Image">
                <p>My name is Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, repellendus?</p>
            </div>

            <div class="mylinks">
                <a href="https://github.com/dayanandyadav205"><img src="images/github.jpg" alt=""></a>
            </div>


        </aside>


        <main>
            <div class="iwt5">
                <img src="images/nba.png" alt="CDGI Image">
                <h1>IWT5</h1>
                <p>
                    IWT5 is an educational web development and programming resource platform created by Dayanand Yadav,
                    an
                    Assistant Professor in the Computer Science & Engineering Department at Chameli Devi Group of
                    Institutions
                    (CDGI) in Indore, India.</p>
            </div>
            <h3>Core Technologies</h3>
            <div>
                <h4>HTML (HyperText Markup Language)</h4>
                <p>The structural backbone of the web. HTML is used to define and arrange elements on a webpage, such as
                    paragraphs, headers, links, and forms.</p>
            </div>

            <!-- CSS -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>CSS (Cascading Style Sheets)</h3>
                    <p>The design and presentation layer. CSS controls how HTML elements look by managing layouts,
                        colors, fonts, spacing, and responsive behaviors across devices.</p>
                </div>
            </article>

            <!-- JavaScript -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>JavaScript (JS)</h3>
                    <p>The interactive behavior engine. JavaScript runs primarily in the client browser, handling
                        complex user interactions, data validation, animations, and dynamic content updates.</p>
                </div>
            </article>

            <!-- PHP -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <h3>PHP (Hypertext Preprocessor)</h3>
                    <p>A server-side scripting language. PHP processes incoming data from forms, communicates with
                        databases, and dynamically generates customized HTML before it reaches the browser.</p>
                </div>
            </article>

            <!-- MySQL -->
            <article>
                <div>
                    <!-- Image placeholder if needed -->
                </div>
                <div>
                    <section id="mysql">
                        <h3>MySQL</h3>
                        <p>The structural relational database management system. MySQL securely stores, retrieves, and
                            organizes data like user profiles, application content, and transaction histories.</p>
                    </section>
                </div>
            </article>

        </main>

    </div>

    <a href="#top">Go to top</a>

    
</body>

</html>