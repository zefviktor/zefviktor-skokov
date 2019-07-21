function smoothScroll(Element) {

    Element = document.getElementById(Element);
    var selectedPosX = 0;
    var selectedPosY = 0;
    while (Element != null) {
        selectedPosX += Element.offsetLeft;
        selectedPosY += Element.offsetTop;
        Element = Element.offsetParent;
    }
    window.scrollTo(selectedPosX, selectedPosY);
}

// <a onclick="smoothScroll('news')"> go to</a>

// <div id="news">this</div>

// css:   html {scroll-behavior: smooth}
