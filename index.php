<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajao - Let's Play Something</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>

<body>

    <div class="head">
        <img src="logo.png" alt="" id="logo">
        <img src="log.png" alt="" id="bajao">
        
    </div>
    <input type="button" id="but1" onclick="location.href='contact.php'" value="Contact Us" />

    <div class="container">
        <div class="songList">
            <h1>Best of 20's</h1>
            <div>
                <div class="songItem" id="s1">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="0" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s2">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="1" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s3">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="2" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s4">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="3" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s5">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="4" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s6">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="5" class="far songItemPlay fa-play-circle"></i> </span>
                </div>
                <div class="songItem" id="s7">
                    <img alt="1">
                    <span class="songName"></span>
                    <span class="songlistplay"> <i id="6" class="far songItemPlay fa-play-circle"></i> </span>
                </div>

            </div>
        </div>

        <img src="bg.jpg" alt="image">

    </div>

    <!-- Album -->
    <br><br><br>
    <hr>

    <div class="albums">
        <h1 class="heading">Songs By Genres</h1>
        <div class="playlists-group">

            <div class="playlist-card">
                <a href="https://www.jiosaavn.com/" target="_blank">
                    <img src="genres/1.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">Trending</p>
                </a>
            </div>

            <div class="playlist-card">
                <a href="https://www.jiosaavn.com/featured/romantic-top-40/m9Qkal5S733ufxkxMEIbIw__"
                    target="_blank">
                    <img src="genres/4.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">Romantic</p>
                </a>
            </div>

            <div class="playlist-card">
                <a href="https://www.jiosaavn.com/album/top-devotional-songs/DdiF,jfJE3U_" target="_blank">
                    <img src="genres/2.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">Devotional</p>
                </a>
            </div>

            <div class="playlist-card">
                <a href="https://www.jiosaavn.com/featured/best-of-90s---hindi/j44dgfQrkXY_" target="_blank">
                    <img src="genres/3.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">90's Hits</p>
                </a>
            </div>

        </div>

        <br><br><br><br>
        <hr>
        <h1 class="heading">Languages</h1>
        <div class="playlists-group">
            <a href="https://www.jiosaavn.com/english"
                target="_blank">
                <div class="playlist-card">
                    <img src="languages/1.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">English</p>
                </div>
            </a>

            <a href="https://www.jiosaavn.com/hindi"
                target="_blank">
                <div class="playlist-card">
                    <img src="languages/2.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">Hindi</p>
                </div>
            </a>

            <a href="https://www.jiosaavn.com/marathi"
                target="_blank">
                <div class="playlist-card">
                    <img src="languages/3.jpg" class="playlist-card-img">
                    <p class="playlist-card-name">Marathi</p>
                </div>
            </a>

            <a href="https://www.jiosaavn.com/punjabi" target="_blank">
                <div class="playlist-card">
                    <img src="languages/4.jpeg" class="playlist-card-img">
                    <p class="playlist-card-name">Punjabi</p>
                </div>
            </a>

        </div>
        <br><br><br><br>
        <hr>


        <h1 class="heading">Artist</h1>
        <a href="https://www.jiosaavn.com/artist/arijit-singh-/LlRWpHzy3Hk_?msclkid=7260ed4fb97011ecb752e17c15e41a05"
            target="_blank">
            <div class="playlists-group">
                <div class="playlist-card">
                    <img src="artists/1.png" class="playlist-card-img">
                    <p class="playlist-card-name">Best of Arijit's</p>
                </div>
        </a>

        <a href="https://www.jiosaavn.com/artist/lata-mangeshkar-/FCtl69DObYg_?msclkid=bbcaba38b97011ec9f72e8056f0bc4c9"
            target="_blank">
            <div class="playlist-card">
                <img src="artists/2.jpg" class="playlist-card-img">
                <p class="playlist-card-name">Best of Lata Di</p>
            </div>
        </a>

        <a href="https://www.jiosaavn.com/artist/sonu-nigam-songs/,kuQK6K6u0I_?msclkid=9e8254fbb97011ecb1a301aa91456a08"
            target="_blank">
            <div class="playlist-card">
                <img src="artists/3.jpg" class="playlist-card-img">
                <p class="playlist-card-name">Best of Sonu Nigam</p>
            </div>
        </a>

        <a href="https://www.jiosaavn.com/artist/neha-kakkar-songs/EkEBV7JAU-I_" target="_blank">
            <div class="playlist-card">
                <img src="artists/4.jpg" class="playlist-card-img">
                <p class="playlist-card-name">Best of Neha Kakkar</p>
            </div>
        </a>

    </div>
    <br><br><br><br>
    <hr>
    
    <h1 class="heading">Song Carousel</h1>
    <div class="container_2">
        <div class="carousel">
            <div class="carousel__face" id="child1">Live Radio</div>
            <div class="carousel__face" id="child2">Movies</div>
            <div class="carousel__face" id="child3">Artists</div>
            <div class="carousel__face" id="child4">Languages</div>
            <div class="carousel__face" id="child5">Romantic</div>
            <div class="carousel__face" id="child6">Silent</div>
            <div class="carousel__face" id="child7">Old Hits's</div>
            <div class="carousel__face" id="child8">Instrumental</div>
            <div class="carousel__face" id="child9">Pop Songs</div>
        </div>
    </div>


    </div>


    <div class="qr"><img src="qr-code.png" id="qr" alt="" srcset="">
        <p><i>~ Scan to download our app</i></p>
    </div>

    <hr>
    <br><br><br><br><br><br><br>

    <div class="bottom">
        <p id="time">0 : 0</p>
        <input type="range" name="range" id="myProgressBar" value="0" min="0" max="100">
        <div class="icons">
            <!-- fontawesome icons -->
            <i class="fas fa-3x fa-step-backward" id="previous"></i>
            <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
            <i class="fas fa-3x fa-step-forward" id="next"></i>
        </div>

        <div class="songInfo">
            <img src="playing.gif" id="gif" height="20px" width="42px"> <span id="masterSongName">~ Let's Play
                Something</span>
        </div>

    </div>

    <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>