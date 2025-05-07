<div class="embed">
    <div id="data-policy" class="data-policy">
        <p>Aus Datenschutzgründen benötigen wir Ihre Zustimmung um die OpenStreetMaps Karte zu laden.<br>
            Für weitere Informationen beachten Sie unsere Datenschutzerklärung<br>

            <a target="_blank" href="{{link_url::12|urlattr}}">Mehr erfahren</a>
            <br>
            <button onclick="mapLoad()">Ich stimme zu</button>
        </p>
    </div>

    <iframe id="map_iframe" class="map_frame" frameborder="0"
            allowfullscreen data-src="https://umap.openstreetmap.fr/de/map/karlsruhe2_1177605#15/49.0065/8.4108?
            scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&
    allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&
    datalayersControl=false&onLoadPanel=undefined&captionBar=false">
    </iframe>

    <img style="position: absolute; z-index: -1; display: none;"

         id="laod" src="/files/assets/layout/loadgif.gif">

</div>
