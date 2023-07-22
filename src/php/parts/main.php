<main>
    <div id="home" class="box">
        <h1><?= $langJSON["title"] ?></h1>
    </div>
    <div id="work" class="box">
        <h2><?= $langJSON["title"]["menu"]["work"] ?></h2>
        <div id="myBtnContainer">
            <div class="btn active" onclick="filterSel('all')"> <i class="devicon-html5-plain"></i> <p>összes</p></div>
            <div class="btn" onclick="filterSel('css')"> <i class="devicon-sass-plain"></i> <p>css</p></div>
            <button class="btn" onclick="filterSel('boot')"><i class="devicon-bootstrap-plain"></i> <p>bootstrap</p></button>
            <button class="btn" onclick="filterSel('js')"> <i class="devicon-javascript-plain"></i> <p>javascript</p></button>
            <button class="btn" onclick="filterSel('ts')"> <i class="devicon-typescript-plain"></i> <p>typescript</p></button>
            <button class="btn" onclick="filterSel('react')"> <i class="devicon-react-plain"></i> <p>react js</p></button>
            <button class="btn" onclick="filterSel('tjs')"> <i class="devicon-threejs-original"></i> <p>three.js</p></button>
            <button class="btn" onclick="filterSel('php')"> <i class="devicon-php-plain"></i> <p>php</p></button>
            <button class="btn" onclick="filterSel('sql')"> <i class="devicon-mysql-plain"></i> <p>mysql</p></button>
            <button class="btn" onclick="filterSel('wp')"> <i class="devicon-wordpress-plain"></i> <p>wordpress</p></button>
        </div>
        
        <div class="container">
            <div class="filterDiv css js php sql">
                <img src="./img/work/redcat_id.webp" alt="">
            </div>
            <div class="filterDiv css boot js php">
                <img src="./img/work/rabraby.webp" alt="">
            </div>
            <div class="filterDiv css js php">Donut Paradise</div>
            <div class="filterDiv css js">SOL Winery</div>
            <div class="filterDiv css js beh">Szelence</div>
            <div class="filterDiv wp">ÉPÍT7EK</div>
            <div class="filterDiv css js react">Drinking Game</div>
            <div class="filterDiv css js react php sql">Webshop</div>
            <div class="filterDiv css ts react">Windows XP</div>
        </div>
    </div>
    <div id="about" class="box">
        <h2><?= $langJSON["title"]["menu"]["about"] ?></h2>
        <img src="./img/profile.webp" alt="">
    </div>
    <div id="contact" class="f0 box">
        <h2><?= $langJSON["title"]["menu"]["contact"] ?></h2>
        <div class="inner f0 cleft">
            <h3>Németh Norbert</h3>
            <div><i class="bi bi-envelope-fill"></i> <a href="mailto:info@red-cat.hu">info@red-cat.hu</a></div>
            <div><i class="bi bi-envelope-fill"></i> <a href="#">Digitális névjegykártya</a></div>
            <?= PrintSocial(); ?>
        </div>
        <div class="inner f0 cright">
            <h3>Írj emailt közvetlen az oldalról</h3>
            <form action="mailto:info@example.com" method="post" enctype="text/plain">
                <label for="name">Név:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">E-mail cím:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Üzenet:</label><br>
                <textarea id="message" name="message" required></textarea><br>
                <input type="submit" value="Küldés">
            </form>
        </div>
</main>