<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Développement</title>
</head>
<body>
    <video autoplay muted loop id="background-body">
        <source src="img/background.mp4" type="video/mp4">
    </video>
    <div class="gradient-background-body"></div>
    <header>
        <nav>
            <ul>
                <li class="actif" id="header-home">Accueil</li>
                <li id="header-aboutme">À propos</li>
                <a href="projets.html" id="header-projects"><li>Projets</li></a>
                <li id="header-contact">Contact</li>
            </ul>
        </nav>
    </header>
    <footer>
        <div class="footer-left">
            <span>Réalisé par BLASER Marvin.</span>
            <div class="separate-horizontal"></div>
            <div class="footer-social-links">
                <ul>
                    <a href="">
                        <li id="footer-linkedin">
                            <svg id="footer-linkedin-svg" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"
                                fill="#d4b7d1">
                                <path
                                    d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zM8.951 9.404H6.165V17.5H8.95V9.404zm6.841-.192c-1.324 0-1.993.629-2.385 1.156l-.127.181V9.403h-2.786l.01.484c.006.636.007 1.748.005 2.93l-.015 4.683h2.786v-4.522c0-.242.018-.484.092-.657.202-.483.66-.984 1.43-.984.955 0 1.367.666 1.408 1.662l.003.168V17.5H19v-4.643c0-2.487-1.375-3.645-3.208-3.645zM7.576 5.5C6.623 5.5 6 6.105 6 6.899c0 .73.536 1.325 1.378 1.392l.18.006c.971 0 1.577-.621 1.577-1.398C9.116 6.105 8.53 5.5 7.576 5.5z" />
                            </svg>
                            <span id="footer-linkedin-span">LinkedIn</span>
                        </li>
                    </a>
                    <a href="">
                        <li id="footer-instagram">
                            <svg id="footer-instagram-svg" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"
                                fill="#d4b7d1">
                                <path
                                    d="M12 0c6.6274 0 12 5.3726 12 12s-5.3726 12-12 12S0 18.6274 0 12 5.3726 0 12 0zm3.115 4.5h-6.23c-2.5536 0-4.281 1.6524-4.3805 4.1552L4.5 8.8851v6.1996c0 1.3004.4234 2.4193 1.2702 3.2359.7582.73 1.751 1.1212 2.8818 1.1734l.2633.006h6.1694c1.3004 0 2.389-.4234 3.1754-1.1794.762-.734 1.1817-1.7576 1.2343-2.948l.0056-.2577V8.8851c0-1.2702-.4234-2.3589-1.2097-3.1452-.7338-.762-1.7575-1.1817-2.9234-1.2343l-.252-.0056zM8.9152 5.8911h6.2299c.9072 0 1.6633.2722 2.2076.8166.4713.499.7647 1.1758.8103 1.9607l.0063.2167v6.2298c0 .9375-.3327 1.6936-.877 2.2077-.499.4713-1.176.7392-1.984.7806l-.2237.0057H8.9153c-.9072 0-1.6633-.2722-2.2076-.7863-.499-.499-.7693-1.1759-.8109-2.0073l-.0057-.2306V8.885c0-.9073.2722-1.6633.8166-2.2077.4712-.4713 1.1712-.7392 1.9834-.7806l.2242-.0057h6.2299-6.2299zM12 8.0988c-2.117 0-3.871 1.7238-3.871 3.871A3.8591 3.8591 0 0 0 12 15.8408c2.1472 0 3.871-1.7541 3.871-3.871 0-2.117-1.754-3.871-3.871-3.871zm0 1.3911c1.3609 0 2.4798 1.119 2.4798 2.4799 0 1.3608-1.119 2.4798-2.4798 2.4798-1.3609 0-2.4798-1.119-2.4798-2.4798 0-1.361 1.119-2.4799 2.4798-2.4799zm4.0222-2.3589a.877.877 0 1 0 0 1.754.877.877 0 0 0 0-1.754z" />
                            </svg>
                            <span id="footer-instagram-span">Instagram</span>
                        </li>
                    </a>
                    <a href="">
                        <li id="footer-twitter">
                            <svg id="footer-twitter-svg" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"
                                fill="#d4b7d1">
                                <path
                                    d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm3.193 7c-1.586 0-2.872 1.243-2.872 2.777 0 .217.025.43.074.633a8.251 8.251 0 0 1-5.92-2.902c-.247.41-.389.887-.389 1.397 0 .963.507 1.813 1.278 2.311a2.94 2.94 0 0 1-1.301-.348v.036c0 1.345.99 2.467 2.304 2.723a2.98 2.98 0 0 1-1.298.047c.366 1.103 1.427 1.906 2.683 1.928a5.889 5.889 0 0 1-3.567 1.19c-.231 0-.46-.014-.685-.04A8.332 8.332 0 0 0 9.903 18c5.283 0 8.172-4.231 8.172-7.901 0-.12-.002-.24-.008-.36A5.714 5.714 0 0 0 19.5 8.302a5.869 5.869 0 0 1-1.65.437 2.8 2.8 0 0 0 1.263-1.536 5.87 5.87 0 0 1-1.824.674A2.915 2.915 0 0 0 15.193 7z" />
                            </svg>
                            <span id="footer-twitter-span">Twitter</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="footer-right">
            <button>Me faire un retour</button>
            <span id="footer-tel">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#d4b7d1" stroke="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                06 31 77 97 01
            </span>
        </div>
    </footer>
    <script src="dev.js"></script>
</body>

</html>