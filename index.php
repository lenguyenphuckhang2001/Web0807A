<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>The simple web</title>
</head>

<body>
    <nav id="topmenu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Other</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <article>
                <header>
                    <h1>Just Another Day</h1>
                    <p>Written by Christina on January 11th</p>
                </header>
                <p>This is my second, and I just wanted to check in on you</p>
            </article>
            <article>
                <header>
                    <h1>My First Blog Entry</h1>
                    <p>Written by Christina on January 11th </p>
                </header>
                <p>I'm so happy to write my first blog entry - yay!</p>
            </article>
        </section>
    </main>
    <footer>
        <p>&copy; Copy Right 2009 Your Name</p>
    </footer>
    <div>
        <h1>Audio Section</h1>
        <p>Sai gon dep lam</p>
        <audio controls>
            <source src="SaiGonDepLamTramomRemix-PhuongVy-6063592.mp3" type="audio/mp3">
        </audio>
    </div>
    <div>
        <h1>Video Section</h1>
        <video controls="controls">
            <source src="yt1s.com - Nợ Ai Đó Lời Xin Lỗi Lofi ver  Bozitt x Freak D_360p.mp4" type="video/mp4">
            Your browser does not support the video .
        </video>
    </div>
    <div>
        <form>
            <label for="username">User name :</label>
            <input type="text" id="username"><br><br>
            <label for="password">Password :</label>
            <input type="text" id="password">
          </form>
        <form>
            <h4>Select a radio</h4>
            <p>Where do you live</p>
            <select name="Country" required>
                <option value="" disabled selected hidden>Choose your country</option>
                <option value="hanoi">Hanoi</option>
                <option value="danang">Danang</option>
                <option value="tphcm">TpHCM</option>
            </select>
        </form>
        <br>
        <form>
            <input type="radio" id="hanoi" name="country" value="Hanoi">
            <label for="Hanoi">Hanoi</label><br>
            <input type="radio" id="danang" name="country" value="Danang">
            <label for="Danang">Danang</label><br>
            <input type="radio" id="TpHCM" name="county" value="tphcm">
            <label for="tphcm">TpHCM</label>
        </form>
        <h4>Check Box</h4>
        <form action="/action_page.php">
            <p> Where do you want to visit</p>
            <form>
                <input type="checkbox" id="vehicle1" >
                <label for="hanoi"> Ha noi</label><br>
                <input type="checkbox" id="vehicle2" >
                <label for="danang"> Da Nang</label><br>
                <input type="checkbox" id="vehicle3" >
                <label for="tphcm"> Tp HCM</label>
            </form>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Saving</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Peter</td>
                    <td>Griffin</td>
                    <td>$100</td>
                </tr>

                <tr>
                    <td>Lois</td>
                    <td>Griffin</td>
                    <td>$100</td>
                </tr>

                <tr>
                    <td>Joe</td>
                    <td>Swanson</td>
                    <td>$300</td>
                </tr>

                <tr>
                    <td>Cleveland</td>
                    <td>Brown</td>
                    <td>$250</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>