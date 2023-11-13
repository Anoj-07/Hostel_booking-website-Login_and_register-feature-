
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>

    <!-- header (Nav) -->

    <header class="nav">
        <h3>logo</h3>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#abt">About</a>
            <a href="#rms">Service</a>
            <a href="#cnt">Contact</a>
            <a href="login.php" class="nab_bar_btn">Log Out</a>
    </header>



    <!-- Section 1 (Home) -->

    <section id="home">


        <div class="media">
            <img src="back-ground.png" alt="home_img">
            <div class="home_greet">
                <h2>Welcome to HostelHub</h2>
                <h1> Our hostel <span class="home_input"></span></h1>
            </div>
            <div class="home_book">
                <h2>Book Your Room</h2>
                <hr>
                <div class="home_book_info">
                    <h4>Check In date : <input type="date"></h4>
                    <h4>Check Out date : <input type="date"></h4>
                    <h4>Number of Rooms : <input type="number"></h4>
                    <h4>Number of person : <input type="number"></h4>
                    <hr>
                    <button><a href="">Check availability</a></button>
                </div>
            </div>
        </div>


    </section>

    <!-- Section 2 (About) -->

    <section id="abt">
        <div class="abt_head">
            <h2>About Us</h2>
        </div>
        <div class="abt_img">
            <img src="back-ground.png" alt="">
            <div class="abt_info">
                <p>Lorzm ipsum dolor sit, amet consectetur adipisicing elit. Placeat beatae amet consequuntur. Delectus
                    vel
                    voluptatem impedit nobis aspernatur nostrum, maiores iste illum voluptas neque sed laudantium modi
                    similique eius odit?</p>
            </div>
        </div>
        <div class="abt-sec-img">
            <div class="abt-sec-info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In maiores reprehenderit nihil sapiente, ab
                eligendi illo doloribus. Deleniti autem dignissimos voluptas dolor in eaque ex voluptatum aliquid
                sequi, dicta quo.
            </div>
            <img src="back-ground.png" alt="">
        </div>

    </section>

    <!-- Section 3 (Rooms) -->

    <section id="rms">
        <h1>Our Service</h1>
        <div class="card-rms">
            <div class="card-first-rms">
                <img src="back-ground.png" alt="">
                <h2>Single room</h2>
                <h3>Price: $89/night</h3>
                <button>More Info</button>
            </div>

            <div class="card-sec-rms">
                <img src="back-ground.png" alt="">
                <h2>Single room</h2>
                <h3>Price: $89/night</h3>
                <button>More Info</button>
            </div>

            <div class="card-thrd-rms">
                <img src="back-ground.png" alt="">
                <h2>Single room</h2>
                <h3>Price: $89/night</h3>
                <button>More Info</button>
            </div>
        </div>
    </section>

    <!-- Section 4 (Contact) -->
    <section id="cnt">
        <div class="cnt-h1">
            <h1>Contact Us</h1>
            </div>
            <div class="cnt-info">
                <h2>Panikhati , Assam , India</h2>
                <h2>(+91) 97384575739</h2>
                <h2>Example@gmail.com</h2>
            </div>
        </div>
    </section>

    <footer class="foot">
        © 2023 HostelHub| Designed by : Anoj Rawal
    </footer>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>