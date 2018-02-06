<div class="col-sm-4">

    <h3>Webcam</h3>

        <div id="divWebcam" class="embed-responsive embed-responsive-16by9">
            <video id="video">
            <source id="videoSrc" src="/video/secuencia_completa.mp4" type="video/mp4" />
            </video>
        </div>

    <h3>Leyendas</h3>

    <div class="tab">
        <button class="tablinks" onclick="openLegend(event, 'divRobot')">Robot</button>
        <button class="tablinks" onclick="openLegend(event, 'divMando')">Mando</button>
    </div>

    <div id="divRobot" class="tabcontent">

        <img id="robot" src="/img/RobotAxis.png" class="img-responsive" alt="Mando robot">

    </div>


    <div id="divMando" class="tabcontent" >

        <img id="mando" src="/img/mando.png" class="img-responsive" alt="Mando robot">

    </div>


</div>