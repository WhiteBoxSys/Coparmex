<?php
function HeaderOtherPages($titulo)
{
    $html =  '
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">' . $titulo . '</h1>
                </div>
            </div>
    </div>
    ';
    echo $html;
}
